<?php
class GetWeatherInformation {
}

class GetWeatherInformationResponse {
  public $GetWeatherInformationResult; // ArrayOfWeatherDescription
}

class WeatherDescription {
  public $WeatherID; // short
  public $Description; // string
  public $PictureURL; // string
}

class GetCityForecastByZIP {
  public $ZIP; // string
}

class GetCityForecastByZIPResponse {
  public $GetCityForecastByZIPResult; // ForecastReturn
}

class ForecastReturn {
  public $Success; // boolean
  public $ResponseText; // string
  public $State; // string
  public $City; // string
  public $WeatherStationCity; // string
  public $ForecastResult; // ArrayOfForecast
}

class Forecast {
  public $Date; // dateTime
  public $WeatherID; // short
  public $Desciption; // string
  public $Temperatures; // temp
  public $ProbabilityOfPrecipiation; // POP
}

class temp {
  public $MorningLow; // string
  public $DaytimeHigh; // string
}

class POP {
  public $Nighttime; // string
  public $Daytime; // string
}

class GetCityWeatherByZIP {
  public $ZIP; // string
}

class GetCityWeatherByZIPResponse {
  public $GetCityWeatherByZIPResult; // WeatherReturn
}

class WeatherReturn {
  public $Success; // boolean
  public $ResponseText; // string
  public $State; // string
  public $City; // string
  public $WeatherStationCity; // string
  public $WeatherID; // short
  public $Description; // string
  public $Temperature; // string
  public $RelativeHumidity; // string
  public $Wind; // string
  public $Pressure; // string
  public $Visibility; // string
  public $WindChill; // string
  public $Remarks; // string
}


/**
 * Weather class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class Weather extends SoapClient {

  private static $classmap = array(
                                    'GetWeatherInformation' => 'GetWeatherInformation',
                                    'GetWeatherInformationResponse' => 'GetWeatherInformationResponse',
                                    'WeatherDescription' => 'WeatherDescription',
                                    'GetCityForecastByZIP' => 'GetCityForecastByZIP',
                                    'GetCityForecastByZIPResponse' => 'GetCityForecastByZIPResponse',
                                    'ForecastReturn' => 'ForecastReturn',
                                    'Forecast' => 'Forecast',
                                    'temp' => 'temp',
                                    'POP' => 'POP',
                                    'GetCityWeatherByZIP' => 'GetCityWeatherByZIP',
                                    'GetCityWeatherByZIPResponse' => 'GetCityWeatherByZIPResponse',
                                    'WeatherReturn' => 'WeatherReturn',
                                   );

  public function Weather($wsdl = "http://wsf.cdyne.com/WeatherWS/Weather.asmx?wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Gets Information for each WeatherID 
   *
   * @param GetWeatherInformation $parameters
   * @return GetWeatherInformationResponse
   */
  public function GetWeatherInformation(GetWeatherInformation $parameters) {
    return $this->__soapCall('GetWeatherInformation', array($parameters),       array(
            'uri' => 'http://ws.cdyne.com/WeatherWS/',
            'soapaction' => ''
           )
      );
  }

  /**
   * Allows you to get your City Forecast Over the Next 7 Days, which is updated hourly. U.S. 
   * Only 
   *
   * @param GetCityForecastByZIP $parameters
   * @return GetCityForecastByZIPResponse
   */
  public function GetCityForecastByZIP(GetCityForecastByZIP $parameters) {
    return $this->__soapCall('GetCityForecastByZIP', array($parameters),       array(
            'uri' => 'http://ws.cdyne.com/WeatherWS/',
            'soapaction' => ''
           )
      );
  }

  /**
   * Allows you to get your City's Weather, which is updated hourly. U.S. Only 
   *
   * @param GetCityWeatherByZIP $parameters
   * @return GetCityWeatherByZIPResponse
   */
  public function GetCityWeatherByZIP(GetCityWeatherByZIP $parameters) {
    return $this->__soapCall('GetCityWeatherByZIP', array($parameters),       array(
            'uri' => 'http://ws.cdyne.com/WeatherWS/',
            'soapaction' => ''
           )
      );
  }

}

?>
