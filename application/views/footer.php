
<footer class="footer ml-3" style="position: absolute; bottom: 10px;">
    <div>
        Desenvolvido por: <strong>Mikael A. Boff</strong> | <a href="https://www.linkedin.com/in/mikaelboff/">Linkedin</a><br>

        <strong>Copyright</strong> ENCURTAEU &copy; 2018-<?php echo date('Y'); ?> | Todos os Direitos Reservados.

    </div>
</footer>    

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<script>
    $(document).ready(function () {
        window.setTimeout("fadeMyDiv();", 500); //call fade in 3 seconds
    });

    function fadeMyDiv() {
        $(".card").fadeIn('slow');
    }
</script>