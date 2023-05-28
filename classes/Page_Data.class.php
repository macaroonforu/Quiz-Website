<?php
class Page_Data{
    private string $title = ""; 
    private string $content = ""; 
    private string $css = ""; 
    private string $embeddedStyle = ""; 

    function __construct(){
        $title = "Title Goes Here"; 
        $content = "Page Content Goes Here"; 
        $css = "CSS Goes Here"; 
        $embeddedStyle = "Embedded CSS Goes Here"; 
    }

    public function getTitle() : string{
        return $this->title; 
    }

    public function setTitle(string $value){
        $this->title = $value;
    }

    public function getContent() : string{
        return $this->content; 
    }

    public function setContent(string $value){
        $this->content = $value; 
    }

    public function appendContent(string $value){
        $this->content .= $value; 
    }

    public function getCss() : string {
		return $this->css;
	}
	public function setCss(string $value) {
		$this->css = $value;
	}
	
	public function getEmbeddedStyle() : string {
		return $this->embeddedStyle;
	}
	public function setEmbeddedStyle(string $value) {
		$this->embeddedStyle = $value;
		}

}
?>