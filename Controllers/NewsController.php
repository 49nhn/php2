<?php

class NewsController extends BaseController {
    public $arraytest = [
        [
            'ho' => 'nguyen',
            'ten' => 'van a',
            'tuoi' => 20
        ],
        [
            'ho' => 'nguyen',
            'ten' => 'van b',
            'tuoi' => 21
        ],
        [
            'ho' => 'nguyen',
            'ten' => 'van c',
            'tuoi' => 22
        ]
    ];
    public function Index() {
        return $this->View('news.index',['title'=>'News','news'=>$this->arraytest]);
    }

    public function CateGory() {
        return $this->View('news.category');
    }

}