<footer class="footer footer--bottom">
    <div class="copyright">
        <a href="/?page_id=16/" class="link link--cookies">Zpracování osobních údajů</a>
        <span>Vytvořil: <a href="https://konecnymichal.cz" class="link">Michal Konečný</a>, 2020</span>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
    let phones = document.querySelectorAll('[href^="tel:+"]');
    if(phones.length !== 0){
        let p = Array.from(phones)
        p.forEach( function(l) {
            let h = l.getAttribute("href");
            //console.log(h);
            h = h.replace(/\s/g, '');
            //console.log(h);
            l.setAttribute("href",h);
            //console.log(l);
            }
        )
    }
    
</script>

</body>
</html>