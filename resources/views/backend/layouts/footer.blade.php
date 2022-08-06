@yield('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#toggle-btn").on("click", function() {
            $("#sidebar").toggleClass("sidebarClose");
            $(".mainContentArea").toggleClass("fullWidthContent");
        });

        $("#downArrow").on("click", function() {
            $("#headerDropdown").slideToggle(400);
        });

        $("#clientName,#clientSelect").hide();
        $("#member").attr('checked', 'checked');
        $('input[type=radio][name=clientType]').change(function() {
            if (this.value == 'new') {
                $("#memberInput,#clientSelect").hide();
                $("#clientName").show();
            } else if (this.value == 'old') {
                $("#clientSelect").show();
                $("#clientName,#memberInput").hide();
            } else {
                $("#memberInput").show();
                $("#clientName,#clientSelect").hide();
            }
        });

        $("#formClear").click(function() {
            $("#memberForm:not('#clientType')").trigger("reset");
            $("#address").val("Enter your address here...");
        });
    });

    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function() {
                $("#previewImg").attr("src", reader.result);
            };

            reader.readAsDataURL(file);
        }
    }
</script>

</body>

</html>
