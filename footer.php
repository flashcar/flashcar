<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
<footer class="py-8 px-16 flex flex-col md:flex-row" style="background-color: black;">
        <div class="basis-1/4" style="color: white;">
                <h3 class="text-md  py-6" style="color: #5f686c;">Tu nas znajdziesz</h3>
                
                <ul type="" style="color: #858586;">
                        <li class="py-1 text-sm"><i class="fa-solid fa-location-pin mr-2" style="color: #FDC10C;"></i>  ul. Gościniec 4, Bęczków, Kielce</li>
                        <li class="py-1 text-sm"><i class="fa-solid fa-phone mr-2" style="color: #FDC10C;"></i> +48 530 803 539</li>
                        <li class="py-1 text-sm"><i class="fa-solid fa-envelope mr-2" style="color: #FDC10C;"></i> kontakt@flashcar.pl</li>
                </ul>
        </div>

        <div class="basis-1/4">
                <h3 class="text-md  py-6" style="color: #5f686c;">Godziny otwarcia</h3>

                <ul class="">
                        <li class="" style="color: #5f686c">Poniedziałek - Piątek</li>
                        <li style="color: #858586">8:00 - 19:00</li>
                        <li class="mt-4" style="color: #5f686c;">Sobota</li>
                        <li class="" style="color: #858585;">09:00 - 16:00</li>
                </ul>
        </div>
        <div class="basis-1/4">
                <h3 class="text-md  py-6" style="color: #5f686c;">Obserwuj Nas</h3>

                <ul class="">
                        <a href="https://www.facebook.com/flashcardetaling">
                                <li style="display: inline;"><i class="fa-brands fa-facebook text-2xl mr-4" style="color: #858585;"></i></li>
                        </a>
                        <a href="https://www.instagram.com/flashcarpolska/">
                                <li style="display: inline;"><i class="fa-brands fa-instagram text-2xl" style="color: #858585;"></i></li>
                        </a>
                </ul>
        </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_template_directory_uri(); ?>/static/js/mobileNav.js"></script>       
    <script>
      let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.getAttribute("data-modal");
          document.getElementById(modal).style.display = "block";
        };
      });
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function (btn) {
        btn.onclick = function () {
          let modal = btn.closest(".modal");
          modal.style.display = "none";
        };
      });
      window.onclick = function (event) {
        if (event.target.className === "modal") {
          event.target.style.display = "none";
        }
      };
    </script>          
<?php wp_footer(); ?>
   
</body>
</html>