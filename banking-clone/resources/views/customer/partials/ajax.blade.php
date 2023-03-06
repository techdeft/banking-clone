<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script type="text/javascript">
    // Event listener for input field change
    $('input[name="account"]').on('change', function() {

        // Retrieve input value
        var account = document.getElementById("account-input").value;

        // Construct URL for GET request
        var url = "{{ url('user/account/') }}/" + account;

        // Send GET request using fetch function
        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Access account details and update input field value
                var accountInput = document.getElementById("accountname-input");
                accountInput.value = data.first_name + " " + data.last_name;
            })
            .catch(error => console.error(error));
    });
</script>

{{-- <script type="text/javascript">
    // Event listener for input field change
    $('input[name="account_number"]').on('change', function() {

        // Retrieve input value
        var account = document.getElementById("account_number").value;


        // Construct URL for GET request
        var url = "{{ url('bank/') }}/" + account;

        // Send GET request using fetch function
        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Access account details and update input field value
                var accountInput = document.getElementById("AccName");
                accountInput.value = data;
            })
            .catch(error => console.error(error));
    });
</script> --}}

<script type="text/javascript">
    // Event listener for input field change
    $('input[name="account"], select[name="bank"]').on('change', function() {

        // Retrieve input values
        var account = document.getElementById("account").value;
        var bank = document.getElementById("bank").value;

        // Construct URL for GET request
        var url = "{{ url('bank/') }}/" + account + "/" + bank;

        // Send GET request using fetch function
        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Access account details and update input field value
                var accountInput = document.getElementById("AccName");
                accountInput.value = data;
            })
            .catch(error => console.error(error));
    });
</script>
