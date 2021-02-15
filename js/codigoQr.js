var tabId;
var parametros = [];
var color =	hexToRgbA($('.colorCode').val());
var dataURL;

var tab;
var tabSplit;
var tabSelected;

var tabSelect;
var tabPadre;

var tabId;
var sizeqr;
var redundancia;

var fileData;
//var formData;

var imgPrevia;
var dZUpload;
var urlFile;
var origin;

$(document).ready(function() {
	$('.p-dropdown').hide();
    $('#creaTwit').hide();
    $('.input').prop('required', false);
    $('#url').prop('required', true);
    $("input[type='radio'][name='optTwitter']").click(function() {
	    var value = $(this).val();
	    //console.log(value);
	    if (value == 1) {
	    	$('#userTwit').show();
	    	$('#creaTwit').hide();
	    	$('#userTwitter').addClass('input');
	    	$('#creaTwitter').removeClass('input');
	    }
	    else{
	    	$('#userTwit').hide();
	    	$('#creaTwit').show();
	    	$('#userTwitter').removeClass('input');
	    	$('#creaTwitter').addClass('input');
	    }
	});
});


$(".nav-link" ).click(function( event ) {
	tab= $(this).attr("href");
	tabSplit = tab.split('#');
	tabSelected = tabSplit[1];
	$('.tab-pane').each(function(index){
		tabSelect = $(this).attr("id");
		limpiar(tabSelect);
		tabPadre = '#' + tabSelect + ' .input'
		if (tabSelect == tabSelected) {
			$(tabPadre).each(function(index){
				$(this).val('');
				$(tabPadre).removeClass('is-valid');
			    $(this).prop('required', true);
			})
		}
		else{
			$(tabPadre).each(function(index){
			    $(tabPadre).removeClass('is-invalid');
			    $('#' + tabSelect).find('div.is-invalid').hide();
			    $(this).prop('required', false);
			})
		}
	})
});


$("#file-link" ).click(function( event ) {
	$('#modalFile').modal('toggle');
});

function setCharAt(str,index,chr) {
    if(index > str.length-1) return str;
    return str.substring(0,index) + chr + str.substring(index+1);
}

$( ".colorCode" ).change(function() {
	color =	hexToRgbA($(this).val());
});

function hexToRgbA(hex){
    var c;
    if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
        c= hex.substring(1).split('');
        if(c.length== 3){
            c= [c[0], c[0], c[1], c[1], c[2], c[2]];
        }
        c= '0x'+c.join('');
        return [(c>>16)&255, (c>>8)&255, c&255].join(';');
    }
    throw new Error('Bad Hex');
}


$( "#generador" ).submit(function( event ) {
  event.preventDefault();
	$(".tab-pane" ).each(function() {
		if ($(this).hasClass("active")) {
			parametros = [];
			tabId = $(this).attr("id");
			sizeqr = $("#size").val();
			redundancia = $("#redundancia").val();
			tabPadre = '#' + tabId + ' .input'
			parametros.push(tabId);
			parametros.push(sizeqr);
			parametros.push(color);
			if (tabSelected =="file-tab") {
				origin = window.location.href;
			    parametros.push(origin+urlFile);
			}
			else{
				$(tabPadre).each(function(index){
					if ($(this).val() == "" || $(this).val()== null) {
						parametros = [];
					}
					else{
						parametros.push($(this).val());
					}
				})
			}
		}
	});

	if (parametros.length >= 1) {
		$.ajax({
			type: "POST",
			//url: "funciones/testQr.php",
			//url: "codigoQr.php",
			url: "funciones/codigoQr.php",
			//data: jsonString,
			data: {'parametros': JSON.stringify(parametros)},//capturo array     
			success: function(datos){
				$("#vistaPrevia").removeClass('vistaPrevia');
				$(".codigoGenerado").attr("src", datos);
				dataURL = datos.replace("png", "svg+xml");
				$(".jpgDownload").attr("href", datos);
				$('.p-dropdown').show();
			}
		})
	}
});

$('#btnDropdown').click(function(e) {
    e.preventDefault();
});

function limpiar (tab){
	if (tab=='file-tab') {
		$('.p-dropdown').hide();
		imgPrevia = "images/websiteQRCode_noFrame.png";
		$("#vistaPrevia").addClass('vistaPrevia');
		$(".codigoGenerado").attr("src", imgPrevia);
		$('#preview').empty();
	}
	else{
		$('.p-dropdown').hide();
		imgPrevia = "images/websiteQRCode_noFrame.png";
		$("#vistaPrevia").addClass('vistaPrevia');
		$(".codigoGenerado").attr("src", imgPrevia);
	}
}

$('#modalFile').on('hidden.bs.modal', function () {
  dZUpload[0].dropzone.removeAllFiles();  
})



Dropzone.autoDiscover = false;
dZUpload = $("#mydropzone").dropzone({
    url: "funciones/uploadFile.php",
    uploadMultiple:false,
    maxFiles:1,
    acceptedFiles: 'image/*,application/pdf',
    //acceptedFiles: 'image/*,application/pdf,.doc,.docx,.xls,.xlsx',
	addRemoveLinks: true,
	maxFilesize: 0.5,
	addRemoveLinks: true,
	dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-warning"></i> Arrastre el archivo <span class="font-xs">a subir</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (O haga clic aqui)</h4></span>',
	dictResponseError: 'Error al subir el archivo',
	dictRemoveFile: 'Eliminar',
	dictFileTooBig:'El tamaño del archivo es superior al permitido',
	dictInvalidFileType:'El tipo del archivo no es permitido',
	success: function(file, response){
        fileData = setCharAt(response,0,'');
        openFile(file,fileData);
    }
});


function openFile(file, fileData) {
	urlFile = setCharAt(fileData,0,'');
    urlFile = setCharAt(urlFile,0,'');
    var extension = file.type.substr( (file.type.lastIndexOf('.') +1) );
    if (extension == 'image/jpeg' || extension == 'image/jpg' || extension == 'image/png' || extension == 'image/gif') {
    	$('#preview').append("<img src='"+fileData+"' class='img-fluid imgLoad'>");
    }
    else if (extension == 'application/pdf') {
    	$('#preview').append("<canvas id='pdfViewer'></canvas>");
    	previewPDF(file);}
};

function previewPDF(file){
	//var file = file;
	var pdfjsLib = window['pdfjs-dist/build/pdf'];
	// The workerSrc property shall be specified.
	pdfjsLib.GlobalWorkerOptions.workerSrc = 'js/pdf.worker.js';

	if(file.type == "application/pdf"){
		var fileReader = new FileReader();  
		fileReader.onload = function() {
			var pdfData = new Uint8Array(this.result);
			// Using DocumentInitParameters object to load binary data.
			var loadingTask = pdfjsLib.getDocument({data: pdfData});
			loadingTask.promise.then(function(pdf) {
			  
			  // Fetch the first page
			  var pageNumber = 1;
			  pdf.getPage(pageNumber).then(function(page) {
				
				var scale = .75;
				var viewport = page.getViewport({scale: scale});

				// Prepare canvas using PDF page dimensions
				var canvas = $("#pdfViewer")[0];
				var context = canvas.getContext('2d');
				canvas.height = viewport.height;
				canvas.width = viewport.width;

				// Render PDF page into canvas context
				var renderContext = {
				  canvasContext: context,
				  viewport: viewport
				};
				var renderTask = page.render(renderContext);
				renderTask.promise.then(function () {
				});
			  });
			}, function (reason) {
			  // PDF loading error
			  console.error(reason);
			});
		};
		fileReader.readAsArrayBuffer(file);
	}
}