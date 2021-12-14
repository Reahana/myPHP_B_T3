<?php
namespace App\classes;

class Statement
{
    public $i;
    public $data = [];

    public function forLoop()
    {
        $this->foreach ();
        // $this->i =10 ;
        // do
        // {
        //         echo  $this->i.' ' ;
        //         $this->i++;
        // }
        // while ( $this->i<20);
       
        // while ( $this->i<20)
        // {
        //     echo  $this->i.' ' ;
        //     $this->i++;
        // }

        // for($this->i=30; $this->i<=60; $this->i++)
        //  {
        //      echo $this->i.' ';
        //  }
        }

        public function foreach ()
        {
            // $this->data=[10,20,'Habib',122.90,true];
            // foreach($this->data as $item) {
            //     echo $item. "<br/>";
            // }

            $this->data = 
            [
               0 => [
                    'name'      => 'Habib', 
                    'mobile'    => 
                            [
                                'mobile_one' =>'01449122152',
                                'mobile_two' => '01591221520'
                            ], 
                    'email'     =>'habib@gmail.com'
               ],

               1 => [
                    'name'      => 'Reahana', 
                    'mobile'    => '01849122152',
                    'email'     =>'reahana@gmail.com'
               ]
            ];
            echo '<pre>';
            // $_COOKIE [];
            // $_ENV[];
            // $_FILES[];
            // $_GET[];
            // $_POST[];
            // $_REQUEST[];
            // $_SERVER[];
            // $_SESSION[];
            // var_dump($this->data);
            // print_r($this->data);

            // echo $this->data[0]['mobile']['mobile_one'];
            // foreach ($this->data as $item)
            // {
            //     foreach ($item as $key => $value)
            //     {
            //        if(is_array($value))
            //        {
            //            foreach($value as $newValue)
            //            {
            //                echo $newValue.' ';
            //            }
            //        }
            //        else
            //        {
            //            echo $value.' ';
            //        }
            //     }
            // }
            // echo $this->data[1]['name'];
            // foreach ($this->data as $item){
            
            //     foreach($item as $value)
            //     {
            //         echo $value.' ';
            //     }
            //     echo'<br/>';
            // }

        //    foreach($this->data as $key => $item) 
        //    {
        //     echo $key.': &nbsp '. $item.'<br/>';
        //    }
           
        }
}