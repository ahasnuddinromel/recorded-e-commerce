<script>
    const photo = document.querySelector("#photo");
    const photo_label = document.querySelector("#photo_label");
    let file_name = photo.value;
    file_name.addEventListener.change(function () {
        photo_label.innerHTML =
            "<i class='fa-solid fa-file-arrow-up'></i>".file_name;
    });
</script>
<script src="{{asset('backend/assets/js/chart.min.js')}}"></script>
<script src="{{asset('backend/assets/js/script.js')}}"></script>
</body>
</html>
