<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"/>

<div id="messageContainer" class="fixed-bottom bottom-0 end-0">
    <button class="m-3 ps-3 pe-3 pt-4 pb-2 float-end shadow-sm border border-2 rounded-4 bg-white align-middle" onclick="removeMessage()">
        <div style="width: 250px;">
            <div class="d-flex text-success">
                <i class="h5 bi bi-check-circle me-2"></i> <p class="fw-bolder h6">Wykonano akcje!</p>
            </div>
            <div class="fw-bolder text-start text-dark">
                <p class="text-break">• <?php echo $data["messageContent"]; ?></p>
            </div>
        </div>
    </button>
</div>

<script>
    function removeMessage()
    {
        document.getElementById("messageContainer").remove();
    }
</script>