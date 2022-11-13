-<?php $name ="Angelina";
  $profy="actress";
  $sity ="LA";
  $country = "USA";
  $email = "cat@cat.ru";
  $tel = 322233;
  $age= "47 years old"; 
  $lang=["japan","cina","hindy"];
  $skills= [
  'skill_name'=>["sing song","far evay","sleeping","eating"],
  'level'=>[90,70,50,20]
  ];
  $opyt= [
  'whu'=>["Star of  the world","Star of country","Star of the sity"],
  'when'=>["Jan 2011","Deс 2010","Mar 1998","Feb 1998","Jun 1975"],
  'what I did'=>["It was then that Angelina started secretly dating her film partner Brad Pitt. Prior to this relationship, she was married twice and divorced, while Pitt was married to Jennifer Aniston. Soon, everyone knew about their relationship and Brad Pitt got divorced. In 2011, Angelina has mastered another kind of activity - filmmaking. In 2012, the couple Jolie and Pitt finally announced their engagement. In 2014 they got married. In September 2016, Angelina began the divorce process. At the moment, they are raising six children, some of them are adopted.",
  "However, her next role in the “Hackers” was noted by critics. The actress gained high popularity after the biographical film “Gia” (1998). She played Gia Carangi, who was a popular top model in the 1970s. In 1999, she played the role of a rampant rebel Lisa Rowe and in “Girl, Interrupted”. This movie brought her several significant awards. In 2001, she starred in the first episode of “Lara Croft”. The film received lots of criticism. However, soon she got involved in the main project of her life - the movie “Mr. and Mrs. Smith” (2005). This comedy, where she played with Brad Pitt, unexpectedly collected 480 million dollars. In 2014, she starred in her highest - grossing film, Maleficent.",
  "Having great desire to act, she applied to the film school of Lee Strasberg. She studied there for two years. As a teenager she felt like an outsider. She had non-standard appearance, weird habits and second-hand clothes. She was rather thin, wore black clothes and dyed her hair red. Once she admitted that she did various drugs and led a reclusive life. She said she went through really hard times then and she is lucky to have survived them. At the age of 14, she became a model and she appeared in several music videos. Her first role didn’t bring her much popularity. She played a humanoid robot in a low-budget sci-fi thriller “Cyborg 2” (1993)."]
  ]
?>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://www.kino-teatr.ru/news/9758/96083.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $name; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profy; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "{$sity}, {$country}"; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $tel; ?></p>
           <p><i class="fa fa-asterisk fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $age; ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p><?php echo $skills['skill_name'][0]?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][0]?>%"><?php echo $skills['level'][0]?>%</div>
          </div>
          <p><?php echo $skills['skill_name'][1]?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][1]?>%">
              <div class="w3-center w3-text-white"><?php echo $skills['level'][1]?>%</div>
            </div>
          </div>
          <p><?php echo $skills['skill_name'][2]?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][2]?>%"><?php echo $skills['level'][2]?></div>
          </div>
          <p><?php echo $skills['skill_name'][3]?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][3]?>%"><?php echo $skills['level'][3]?>%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p><?php echo $lang[0]?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p><?php echo $lang[1]?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p><?php echo $lang[2]?></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $opyt['whu'][0]?> </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $opyt['when'][0]?> - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p><?php echo $opyt['what I did'][0]?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $opyt['whu'][1]?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $opyt['when'][2]?> - <?php echo $opyt['when'][1]?></h6>
          <p><?php echo $opyt['what I did'][1]?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $opyt['whu'][2]?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $opyt['when'][4]?> - <?php echo $opyt['when'][3]?></h6>
          <p><?php echo $opyt['what I did'][2]?> </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Academy Award for Best Actress</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>n Actress</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b> the Marvel Cinematic Universe </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Actress</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Hollywood </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Actress </p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>