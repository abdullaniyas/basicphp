<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    ?>
    <div class="success-message">
        <div class="success">
            <p>
                <?php echo 'Successfully Entered into the table'; ?>
            </p>
        </div>
    </div>
<?php } ?>
<div class="insert-container hide">
    <div class="insert">
        <p class="insertp">X</p>
        <form id="form-contact" class="styled" action="config/insert.php" method="post" enctype="multipart/form-data">
            <ul>
                <li class="form-row">
                    <input type="text" name="name" id="name" class="input " placeholder="Your Name" required/>
                </li>
                <li class="form-row">
                    <input type="text" name="employid" id="employid" class="input " placeholder="Employ ID" required/>
                </li>
                <li class="form-row">
                    <input type="email" name="email" id="email" class="input" placeholder="Email Address" required/>
                </li>
                <li class="form-row">
                    <input type="text" name="phone" id="phone" class="input " placeholder="Phone Number"  maxlength="10" required/>
                </li>
                <li class="form-row">
                    <input type="text" name="companyname" id="companyname" class="input " placeholder="Company Name" required/>
                </li>
                <li class="form-row">
                    <button class="btn-submit" >Add</button>
                </li>
            </ul>
        </form>
    </div>
</div>
<section>
    <div class="container">

        <div class="content panels php-intro">
            <h2>Introduction</h2>
            <ul>
                <li>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.</li>
                <li>PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.</li>
                <li>PHP files can contain text, HTML, CSS, JavaScript, and PHP code.</li>
                <li>PHP code are executed on the server, and the result is returned to the browser as plain HTML.</li>
                <li>PHP files have extension ".php"</li>
                <li>PHP can generate dynamic page content</li>
                <li>PHP can create, open, read, write, delete, and close files on the server.</li>
                <li>PHP can collect form data.</li>
                <li>PHP can send and receive cookies.</li>
                <li>PHP can add, delete, modify data in your database.</li>
                <li>PHP can be used to control user-access.</li>
                <li> PHP can encrypt data.</li>
                <li>PHP is free to download and use.</li>
                <li>All keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive.</li>
                <li>PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>
                <li>PHP is compatible with almost all servers used today (Apache, IIS, etc.)</li>
                <li>PHP supports a wide range of databases.</li>
                <li>PHP is easy to learn and runs efficiently on the server side.</li>
            </ul>
        </div>
        
        <div class="content panels hide installation">
            <h2>Installation</h2>
            <ul>
                <li>Install a web server (WAMP, XAMPP, LAMP).</li>
                <li>XAMPP : <a href="https://www.apachefriends.org/index.html" target="_blank">https://www.apachefriends.org/index.html</a>.</li>
                <li>XAMPP is the most popular PHP development environment.</li>
                <li>XAMPP is a completely free, easy to install Apache distribution containing MySQL, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use.</li>
                <li>The official PHP website (PHP.net) has installation instructions for PHP: <a href="http://php.net/manual/en/install.php" target="_blank">http://php.net/manual/en/install.php</a>.</li>
            </ul>
        </div>
        
        <div class="content panels hide syntax">
            <h2>Syntax</h2>
            <ul>
                <li>A PHP script can be placed anywhere in the document.</li>
                <li>A PHP script starts with &lt;?php and ends with ?&gt;
                    <pre>
                    <p>
            &lt;?php
            // PHP code goes here
            ?&gt;</p>
                    </pre>
                </li>
            </ul>
            <h2>Variable</h2>
            <ul>
                <li>PHP variable starts with the $ sign, followed by the name of the variable.</li>
                <li>Example:
                    <pre>
                    <p>
            &lt;?php
                $txt = "Hello world!";
                $x = 5;
                $y = 10.5;
            ?&gt;</p>
                    </pre>
                </li>
                <li>All variable names are case-sensitive($color, $COLOR, and $coLOR are treated as three different variables)</li>
                <li>A variable name must start with a letter or the underscore character.</li>
                <li>A variable name cannot start with a number.</li>
            </ul>
            
        </div>
        
        <div class="content panels hide example">
            <h2>Example</h2>
            <pre>
            <p>
            &lt;!DOCTYPE html?&gt;
            &lt;html?&gt;	
                &lt;body?&gt;
                    // This is a single-line comment
                    &lt;?php&nbsp
                        echo "My first PHP script!";
                    ?&gt;	
                    /*		
                    This is a multiple-lines 
                    comment blockthat spans 
                    over multiplelines.
                    */
                &lt;/body?&gt;
            &lt;/html?&gt;

            </p>
            </pre>
            
            
            <div class="search-tab">
                <form>
                    <input type="text" name="typeahead" class="typeahead" autocomplete="off" spellcheck="false" placeholder="Type your Query"><button>Search</button>
                </form>
            </div>

            <div class="insert-tab">
                <p>Insert</p>
            </div>
            <?php
            include_once "config/dbconnection.php"; //Connecting to database
            
            if(isset($_POST["typeahead"])){
            $key = $_GET['typeahead'];} else {$key="";}
            
            $sql = "SELECT * FROM employee where name or email LIKE '%{$key}%'"; //Selects From the Employee table by checking for the match in input
            
            $result = $con->query($sql); //queried value are stored in result

            if ($result->num_rows > 0) {
                ?> 
                <table border="1" cellpadding="0" cellspacing="0" BORDERCOLOR=black >
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Employee ID</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Company Name</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?> 
                            <tr>
                                <td> <?php echo $row["name"] ?></td>
                                <td> <?php echo $row["employid"] ?></td>
                                <td> <?php echo $row["email"] ?></td>
                                <td> <?php echo $row["phone"] ?></td>
                                <td> <?php echo $row["companyname"] ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?> 
                    <div class="no-result">
                        <p><?php echo "Sorry, No matches found"; ?></p> 
                    </div>
                    <?php
                }

                $con->close(); //closes db connection
                ?>
                </tbody>
        </div>
    </div>
</section>