<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Pacifico -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <!-- M Plus 1p -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500&display=swap" rel="stylesheet">
    <!-- Lobster -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Home</title>
</head>


<body>
    <header>
        <nav class="logo">
            <h4><a href="http://modul4.com/">Modul 3</a></h4>
            <ul class="slide">
                <li><a class="active" href="http://modul4.com/">Home</a></li>
                <li><a href="http://profile.modul4.com/">Profile</a></li>
                <li><a href="http://blog.modul4.com/blog.html">Blog</a></li>

            </ul>
            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span> <!-- Buat gasis -->
                <span></span> <!-- Buat gasis -->
                <span></span> <!-- Buat gasis -->

            </div>
        </nav>
        <script src="script.js"></script>
    </header>

    <main>
        <section id="one">
            <?php 

                /**
                 * 
                 */
                class Navigasi
                {
                    public $programming;
                    public $book;

                    function __construct($programming, $book){
                        $this->programming = $programming;
                        $this->book = $book;
                    }
                }

                abstract class Biodata{
                    abstract public function biodata();
                }

                /**
                 * 
                 */
                class Profil extends Biodata
                {
                    public function biodata(){
                        echo "Fahmi Ali Husni";
                        echo " ";
                        echo "2019-330";
                    }
                }

                /**
                 * 
                 */
                class Home extends Biodata
                {
                    public function biodata(){
                        echo "This is Class Home Books";
                        
                    }
                }

                class ListApp extends Biodata
                {
                    public function biodata(){
                        echo "------TO DO LIST-----";
                        
                    }
                }
                /**
                 * 
                 */
                class Java extends Navigasi
                {
                    public function __construct ($programming, $book){
                        parent::__construct($programming, $book);
                    }
                    use ViewJava;
                }

                class javascript extends Navigasi
                {
                    public function __construct ($programming, $book){
                        parent::__construct($programming, $book);
                    }
                    use ViewJavascript;
                }

                class IoT extends Navigasi
                {
                    public function __construct ($programming, $book){
                        parent::__construct($programming, $book);
                    }
                    use ViewIoT;
                }


                trait ViewJava{
                    public function viewJava(){
                        echo "Nama Buku : $this->programming";
                        echo "<br>";
                        echo "About : $this->book";
                        echo "<br>";
                    }
                }

                trait ViewJavascript{
                    public function viewJavascript(){
                        echo "Nama Buku : $this->programming";
                        echo "<br>";
                        echo "About : $this->book";
                        echo "<br>";
                    }
                }

                trait ViewIoT{
                    public function viewIoT(){
                        echo "Nama Buku : $this->programming";
                        echo "<br>";
                        echo "About : $this->book";
                        echo "<br>";
                    }
                }

                
                
                $saya = new Profil();
                echo $saya->biodata();
                echo "<br>";
                echo "<br>";

                $hum = new Home();
                echo $hum->biodata();
                echo "<br>";
                echo "<br>";

                $lis = new ListApp();
                echo $lis->biodata();
                echo "<br>";
                echo "<br>";

                $dev1 = new Java("Opject Oriented Programming","JAVA");
                echo $dev1->viewJava();
                echo "<br>";
                echo "<br>";

                $dev2 = new Javascript("Document Object Model ","JS");
                echo $dev2->viewJavascript();
                echo "<br>";
                echo "<br>";

                $dev3 = new IoT("Membangunkan Manusia Meninggal Virtual","IOT");
                echo $dev3->viewIoT();
                echo "<br>";
                echo "<br>";

                
            ?>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="ContainerLogoFot">
            <div class="logoFot">
                <h1>Modul 3</h1>
            </div>

            <div class="aboutFot">
                <p>Pengetahuan disini sangat menyenangkan, selalu terupdate, program sangat kompleks</p>
                <p>Jangan lupa semangat ngoding</p>
            </div>
        </div>
        <div class="ContainerSosmedFot">
            <ul class="sosmed">
                <li><a href="https://www.facebook.com/LARE.USING.13/"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/fahmi_ali13/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCpuJBYMaQCZht85hw5N1CBw"><i
                            class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </footer>
</body>

</html>