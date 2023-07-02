<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; 

class voiture 
  {
    public string $modele ;
    public string $marque ;
    public int $vitesse;
    public function setVitesse(int $vitesse) {
      if($vitesse<0) {
        $this ->vitesse = 0 ;
      }else{
        $this -> vitesse = $vitesse ;
      }
    }
    public function getVitesse() {
      return $this -> vitesse ;
    }
    public function accelerer(int $vitesse = 0) {
      $this -> vitesse += $vitesse ;
    }
    public function __construct(string $marque, string $modele) {
      $this -> marque = $marque ;
      $this -> modele = $modele ;
    }
  }


    ?> 


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>