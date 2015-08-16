<!Doctype html>
<html>
    <?php
    /* Head */
    include 'headin.php';
    ?>
    <body>
        <?php
        /* Header */
        include 'header.php';
        ?>
        <section>
            <div class="container">

                <form id="form-contact" class="styled" action="components/form.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <ol>
                            <li class="form-row">
                                <input type="text" name="name" id="name" class="input width-99p required " placeholder="Your Name" required/>
                            </li>
                            <li class="form-row">
                                <input type="email" name="email" id="email" class="input width-99p required email" placeholder="Email Address" required/>
                            </li>
                            <li class="form-row">
                                <input type="text" name="companyname" id="companyname" class="width-99p input required " placeholder="Company Name" required/>
                            </li>
                            <li class="form-row">
                                <textarea name="descr" id="descr" class="input-text required " placeholder="Your Message" aria-invalid="false" aria-required="true" rows="5" cols="43" required></textarea>
                            </li>
                            <li class="form-row">
                                <button class="btn-submit" >Add</button>
                            </li>
                        </ol>
                    </fieldset>
                </form>

            </div>
        </section>
        <?php
        /* Footer */
        include 'footer.php';
        ?>
    </body>
</html>