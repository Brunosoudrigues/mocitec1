<?php

 class Project  {
    private $title;
    private $summary;
    private $text;
    private $area;
    private $areaAuthor;
    private $projectEvaluators;
    
    public function __construct($title = null, $summary = null, $text = null, $area = null, $areaAuthor = null, $projectEvaluators= null) {
        $this->title = $title;
        $this->summary = $summary; 
        $this->text = $text;
        $this->area = $area;
        $this->areaAuthor = $areaAuthor;
        $this->projectEvaluators = $projectEvaluators;
    }
    public function setTitle(string $title){
        $this->title = $title;
    }
    
    public function setSummary(string $summary){
        $this->summary = $summary; 
    }
    
    public function setText(string $text){
        $this->text = $text;
    }
    public function setArea(string $area) {
        $this->area = $area;
    }
    
    public function setAreaAuthor(string $areaAuthor) {
        $this->areaAuthor = $areaAuthor;
    }
    
    public function setProjectEvaluators(string $projectEvaluators) {
        $this->projectEvaluators = $projectEvaluators;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    public function getSummary() {
        return $this->summary;
    }
    
    public function getText() {
        return $this->text;
    }
    public function getAreaAuthor() {
        return $this->areaAuthor;
    }
    public function getProjectEvaluators() {
        return $this->projectEvaluators;
    }
}
