<?php
$arr = [
    "message" => "Data has been deleted successfullay",
    "getCode" => "200",
    "payload" =>[
    "data"=>[
            0 => [
                "id"=> "1",
                "status" =>"1",
                "title"=>[
                    0 =>[
                        "id"=> "1",
                        "title" =>"student",
                        "local" =>"en",
                    ],
                    1=>[
                        "id"=> "2",
                        "title" =>"foregin",
                        "local" =>"bn",
                    ]
                ]

            ],

            1=> [
                "id"=> "1",
                "status" =>"1",
                "title"=>[
                    0 =>[
                        "id"=> "1",
                        "title" =>"student",
                        "local" =>"en",
                    ],
                    1=>[
                        "id"=> "2",
                        "title" =>"foregin",
                        "local" =>"bn",
                    ]
                ]

            ]

           ],
     "link"=>"link",
    ]
                   
  ];

  
 // array show:

 
    foreach($arr as $item){
         
        if(is_array($item)){
            
            foreach($item as $s1_item){
               
                 foreach($s1_item as $s2_item){
                    if(is_array($s2_item)){
                        foreach($s2_item as $s3){
                            if(is_array($s3)){
                                foreach($s3 as $s4){
                                    print_r($s4['title']);
                                }
                            }
                        }
                    }
                 }
            }
        }
    }
