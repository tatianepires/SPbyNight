<!-- Footer -->
<footer class="fixed-footer">
    <div class="container text-center">
        <small><?php echo t('footer.credit'); ?></small>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!--
  Custom Scroll Script:
  This minimal script is required to detect scroll position
  and toggle the header styles.
-->
<script>
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            document.querySelector('.navbar').classList.add('scrolled');
        } else {
            document.querySelector('.navbar').classList.remove('scrolled');
        }
    });
</script>
