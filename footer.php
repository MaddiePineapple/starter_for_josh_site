<footer class="container-fluid text-center">
        <div class="container">
            <div class="row">

               <div class="col-md-6 widgetleft">
                    <!-- <a class="navbar-brand" href="#"><span class="josh">JOSH</span> <span class="orange">WHITKIN</span></a> -->
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
                    endif; ?>
               </div> 

               <div class="col-md-6">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
                    endif; ?>
                    <!-- <p>Terms and Conditions</p> -->
               </div> 

            </div> <!-- row -->
        </div> <!-- container -->
    </footer> <!-- container-fluid -->
</body>
</html>