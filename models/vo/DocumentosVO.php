<?php 

namespace Model\VO;

final class DocumentosVO extends VO {
    private $url;

    public function __construct($id = 0 , $url = ""){
        parent::__construct($id);
        $this->url = $url;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }
}
