<?php
$blood = array('A型','B型','O型','AB型');
$star = array('牡羊座','牡牛座','双子座','蟹座','獅子座','乙女座','てんびん座','さそり座','射手座','山羊座','水瓶座','魚座');
$animal = array('子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--        <style>
            #blood {display: none;}
            #star {display: none;}
            #animal {display: none;}
        </style>-->
    </head>
    <body>
        <div>Select JavaScript</div>
        
        <select id="category">
            <option value="non">選択してください。</option>
            <option value="blood">血液型</option>
            <option value="star">星座</option>
            <option value="animal">干支</option>
        </select>
        <select class="small_cat" id="blood">
        <?php
        foreach ($blood as $val){
            echo '<option>'.$val.'</option>';
        }
            ?>
        </select>
        <select class="small_cat" id="star">
        <?php
        foreach ($star as $val){
            echo '<option>'.$val.'</option>';
        }
            ?>
        </select>
        <select class="small_cat" id="animal">
        <?php
        foreach ($animal as $val){
            echo '<option>'.$val.'</option>';
        }
            ?>
        </select>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>
            $(function(){
                var cat_sele = $('select#category');
                var blood_sele = $('select#blood');
                var star_sele = $('select#star');
                var animal_sele = $('select#animal');
                
                blood_sele.css('display', 'none');
                star_sele.css('display', 'none');
                animal_sele.css('display', 'none');
                
                cat_sele.change(function(){
                    var select_cat = cat_sele.val();
                    switch (select_cat){
                        case 'non':
                            blood_sele.css('display', 'none');
                            star_sele.css('display', 'none');
                            animal_sele.css('display', 'none');
                            break;
                        case 'blood':
                            blood_sele.css('display', '');
                            star_sele.css('display', 'none');
                            animal_sele.css('display', 'none');
                            break;
                        case 'star':
                            blood_sele.css('display', 'none');
                            star_sele.css('display', '');
                            animal_sele.css('display', 'none');
                            break;
                        case 'animal':
                            blood_sele.css('display', 'none');
                            star_sele.css('display', 'none');
                            animal_sele.css('display', '');
                            break;
                    }
                    
                });
            });
        </script>
    </body>
</html>
