<?php


namespace Guskov\Logger\Services\Helpers;

use Illuminate\Support\Facades\Log;

class RequestLoggerHelper
{
    /**
     * @var RequestParserHelper
     */
    private RequestParserHelper $requestParserHelper;

    public function __construct
    (
        RequestParserHelper $requestParserHelper
    )
    {
        $this->$requestParserHelper = $requestParserHelper;
    }

    static function addlog()
    {
        if (config('simple-logger.enable')){
        // Request parser
        $context = RequestParserHelper::parse();
        // Daily log message
        Log::channel('daily')->debug($context['Controller'], $context);
        }
    }


}