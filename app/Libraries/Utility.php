<?php
/**
 * General utility functions.
 */

namespace App\Libraries;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

/**
 * This class keeps all utility functions for all classes.
 * @package App\Libraries
 */
class Utility
{
    /**
     * Get base URL.
     *
     * @return string String Base URL
     */
    public static function getBaseUrl()
    {
        $protocol = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ) ? 'https' : 'http';

        return $protocol . '://' . $_SERVER['HTTP_HOST'];
    }

    /**
     * Get language code.
     *
     * @return string Language code
     */
    public function getLanguageCode()
    {
        $language = $this->getDefaultLanguageCode();

        if( !is_null( request()->route() ) ){

            preg_match( '@^(\w+)-@', request()->route()->getName(), $match );

            $prefix = count( $match ) ? $match[1] : '';

            if( in_array( $prefix, config( 'app.language_codes' ), true ) ){
                $language = $prefix;
            }
        }

        return $language;
    }

    /**
     * Get old language code.
     *
     * @return string Old language code
     */
    public static function getOldLanguageCode()
    {
        $oldCodeRegex = '@^' . Utility::getBaseUrl() . '/(\w+)@';

        preg_match( $oldCodeRegex, url()->previous(), $match );

        $oldCode = count( $match ) ? $match[1] : '';

        if( !in_array( $oldCode, config( 'app.language_codes' ) ) ){
            $oldCode = '';
        }

        return $oldCode;
    }

    /**
     * Get the default language code.
     *
     * @return string Default language code
     */
    public static function getDefaultLanguageCode()
    {
        return config( 'app.fallback_locale' );
    }

    /**
     * Get redirected URL.
     *
     * @param string $languageCode Language code
     *
     * @return string Redirected URL
     */
    public static function getRedirectedUrl( string $languageCode )
    {
        $redirectedUrl = url()->previous();

        if( in_array( $languageCode, config( 'app.language_codes' ) ) ){

            $baseUrl       = Utility::getBaseUrl();
            $oldCode       = Utility::getOldLanguageCode();
            $newCode       = $languageCode !== Utility::getDefaultLanguageCode() ? $languageCode : '';
            $regex         = '@^' . $baseUrl . ( $oldCode ? '(/' . $oldCode . '(/.+)|/' . $oldCode . '$)' : '(/.+)?' ) . '@';
            $replacement   = $baseUrl . ( $newCode ? '/' . $newCode : '' ) . ( $oldCode ? '${2}' : '${1}' );
            $redirectedUrl = preg_replace( $regex, $replacement, $redirectedUrl );
        }

        return $redirectedUrl;
    }

    /**
     * Get data with language field.
     *
     * @param string $field Field name
     * @param Model  $model Model
     *
     * @return string $data Field value
     */
    public static function getLanguageFields( string $field, Model $model )
    {
        $languageFields = [ 'en' => $field . '_english', 'th' => $field . '_thai', 'ch' => $field . '_chinese' ];
        $defaultField   = $languageFields['en'];
        $chosenField    = $languageFields[ App::getLocale() ];
        $data           = ( trim( $model->$chosenField ) ) ? $model->$chosenField : $model->$defaultField;

        return $data;
    }

    /**
     * Get content  with language field
     *
     * @param string $field Field name
     * @param Model  $model Model
     *
     * @return string $data Field value
     */
    public static function getContentLanguage( string $field, Model $model )
    {
        $languageFields = [ 'en' => $field . '_english', 'th' => $field . '_thai', 'cn' => $field . '_english' ];
        $defaultField   = $languageFields['en'];
        $chosenField    = $languageFields[ App::getLocale() ];
        $data           = ( trim( $model->$chosenField ) ) ? $model->$chosenField : $model->$defaultField;

        return $data;
    }

    /**
     * Encode slug
     *
     * @param $slug
     *
     * @return array
     */
    public static function encodeSlug( $slug )
    {
        return str_replace( ' ', '_', $slug );
    }

}