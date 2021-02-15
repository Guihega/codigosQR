<?php
/**
 * @title            QR Code
 * @desc             Compatible to vCard 4.0 or higher.
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012-2018, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License <http://www.gnu.org/licenses/gpl.html>
 * @version          1.2
 */

class QRCode
{
    const API_URL = 'https://chart.googleapis.com/chart?chs=';

    private $sData;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->sData = 'INICIO:VCARD ' . "\n";
        $this->sData .= 'VERSION:4.0' . "\n";
    }

    /**
     * The name of the person.
     *
     * @param string $sName
     *
     * @return self
     */
    public function name($sName)
    {
        $this->sData .= 'N:' . $sName . "\n";
        return $this;
    }

    /**
     * The full name of the person.
     *
     * @param string $sFullName
     *
     * @return self this
     */
    public function fullName($sFullName)
    {
        $this->sData .= 'Nombre:' . $sFullName . "\n";
        return $this;
    }

    /**
     * @param string $sAddress
     *
     * @return self
     */
    public function address($sAddress)
    {
        $this->sData .= 'Dirección:' . $sAddress . "\n";

        return $this;
    }

    /**
     * @param string $sNickname
     *
     * @return self
     */
    public function nickName($sNickname)
    {
        $this->sData .= 'Nickname:' . $sNickname . "\n";
        return $this;
    }

    /**
     * @param string $sMail
     *
     * @return self
     */
    public function email($sMail)
    {
        $this->sData .= 'Correo:' . $sMail . "\n";
        return $this;
    }

    /**
     * @param string $sVal
     *
     * @return self
     */
    public function workPhone($sVal)
    {
        $this->sData .= 'Telefono:' . $sVal . "\n";
        return $this;
    }

    /**
     * @param string $sVal
     *
     * @return self
     */
    public function homePhone($sVal)
    {
        $this->sData .= 'Celular:' . $sVal . "\n";
        return $this;
    }

    /**
     * @param string $sUrl
     *
     * @return self
     */
    public function url($sUrl)
    {
        $sUrl = (substr($sUrl, 0, 4) != 'http') ? 'http://' . $sUrl : $sUrl;
        $this->sData .= 'Url:' . $sUrl . "\n";
        return $this;
    }

    /**
     * @param string $sPhone
     * @param string $sText
     *
     * @return self
     */
    public function sms($sPhone, $sText)
    {
        $this->sData .= 'Smsto:' . $sPhone . ':' . $sText . "\n";
        return $this;
    }

    /**
     * @param string $sBirthday Date in the format YYYY-MM-DD or ISO 8601
     *
     * @return self
     */
    public function birthday($sBirthday)
    {
        $this->sData .= 'Nacimiento:' . $sBirthday . "\n";
        return $this;
    }

    /**
     * @param string $sBirthDate Date in the format YYYY-MM-DD or ISO 8601
     *
     * @return self
     */
    public function anniversary($sBirthDate)
    {
        $this->sData .= 'Aniversario:' . $sBirthDate . "\n";
        return $this;
    }

    /**
     * @param string $sSex F = Female. M = Male
     *
     * @return self
     */
    public function gender($sSex)
    {
        $this->sData .= 'Gender:' . $sSex . "\n";
        return $this;
    }

    /**
     * A list of "tags" that can be used to describe the object represented by this vCard.
     *
     * @param string $sCategories
     *
     * @return self
     */
    public function categories($sCategories)
    {
        $this->sData .= 'Categorias:' . $sCategories . "\n";
        return $this;
    }

    /**
     * The instant messenger (Instant Messaging and Presence Protocol).
     *
     * @param string $sVal
     *
     * @return self
     */
    public function impp($sVal)
    {
        $this->sData .= 'Impp:' . $sVal . "\n";
        return $this;
    }

    /**
     * Photo (avatar).
     *
     * @param string $sImgUrl URL of the image.
     *
     * @return self
     *
     * @throws InvalidArgumentException If the image format is invalid.
     */
    public function photo($sImgUrl)
    {
        $bIsImgExt = strtolower(substr(strrchr($sImgUrl, '.'), 1)); // Get the file extension.

        if ($bIsImgExt == 'jpeg' || $bIsImgExt == 'jpg' || $bIsImgExt == 'png' || $bIsImgExt == 'gif') {
            $sExt = strtoupper($bIsImgExt);
        } else {
            throw new InvalidArgumentException('Invalid format Image!');
        }

        $this->sData .= 'Imagen:' . $sExt . ':' . $sImgUrl . "\n";

        return $this;
    }

    /**
     * The role, occupation, or business category of the vCard object within an organization.
     *
     * @param string $sRole e.g., Executive
     *
     * @return self
     */
    public function role($sRole)
    {
        $this->sData .= 'Puesto:' . $sRole . "\n";
        return $this;
    }

    /**
     * The organization / company.
     *
     * The name and optionally the unit(s) of the organization
     * associated with the vCard object. This property is based on the X.520 Organization Name
     * attribute and the X.520 Organization Unit attribute.
     *
     * @param string $sOrg e.g., Google;GMail Team;Spam Detection Squad
     *
     * @return self
     */
    public function organization($sOrg)
    {
        $this->sData .= 'Organización:' . $sOrg . "\n";
        return $this;
    }

    /**
     * The supplemental information or a comment that is associated with the vCard.
     *
     * @param string $sText
     *
     * @return self
     */
    public function note($sText)
    {
        $this->sData .= 'Texto:' . $sText . "\n";
        return $this;
    }

    /**
     * @param string $sTitle
     * @param string $sUrl
     *
     * @return self
     */
    public function bookmark($sTitle, $sUrl)
    {
        $this->sData .= 'Mebkm:Titulo:' . $sTitle . ';Url:' . $sUrl . "\n";
        return $this;
    }

    /**
     * Geo location.
     *
     * @param string $sLat Latitude
     * @param string $sLon Longitude
     * @param integer $iHeight Height
     *
     * @return self
     */
    public function geo($sLat, $sLon, $iHeight)
    {
        $this->sData .= 'Mapa:' . $sLat . ',' . $sLon . ',' . $iHeight . "\n";
        return $this;
    }

    /**
     * The language that the person speaks.
     *
     * @param string $sLang e.g., en-US
     *
     * @return self
     */
    public function lang($sLang)
    {
        $this->sData .= 'Idioma:' . $sLang . "\n";
        return $this;
    }

    /**
     * @param string $sType
     * @param string $sSsid
     * @param string $sPwd
     *
     * @return self
     */
    public function wifi($sType, $sSsid, $sPwd)
    {
        $this->sData .= 'Wifi:T:' . $sType . ';S' . $sSsid . ';' . $sPwd . "\n";
        return $this;
    }

    /**
     * Generate the QR code.
     *
     * @return self
     */
    public function finish()
    {
        $this->sData .= 'FIN:VCARD';
        $this->sData = urlencode($this->sData);
        return $this;
    }

    /**
     * Get the URL of QR Code.
     *
     * @param integer $iSize Default 150
     * @param string $sECLevel Default L
     * @param integer $iMargin Default 1
     *
     * @return string The API URL configure.
     */
    public function get($iSize = 400, $sECLevel = 'L', $iMargin = 1)
    {
        return self::API_URL . $iSize . 'x' . $iSize . '&chco=BB0712&cht=qr&chld=' . $sECLevel . '|' . $iMargin . '&chl=' . $this->sData;
    }

    /**
     * The HTML code for displaying the QR Code.
     *
     * @return void
     */
    public function display()
    {
        echo '<p class="center"><img src="' . $this->_cleanUrl($this->get()) . '" alt="QR Code" /></p>';
    }

    /**
     * Clean URL.
     *
     * @param string $sUrl
     *
     * @return string
     */
    private function _cleanUrl($sUrl)
    {
        return str_replace('&', '&amp;', $sUrl);
    }
}