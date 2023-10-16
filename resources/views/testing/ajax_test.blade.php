<!-- Include the jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
  /* Custom CSS styles for the card */
  #cardContainer {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
  }
  .card {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    margin-bottom: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .card-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .card-text {
    margin-bottom: 5px;
  }

  .btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
  }
</style>

<script>
  $(document).ready(function() {
    $.ajax({
      url: '/offers/get/UK',
      method: 'GET',
      success: function(response) {
        var container = $('#cardContainer');

        // Iterate over the data and generate HTML for each card
        $.each(response, function(index, item) {
          var card = $('<div>').addClass('card');
          var cardBody = $('<div>').addClass('card-body');

          // Create card content using the item properties
          var cardContent = `
            <h5 class="card-title">${item.visa_type}</h5>
            <p class="card-text">${item.visa_category}</p>
            <p class="card-text">${item.destination}</p>
            <p class="card-text">${item.processing_time}</p>
            <!-- Add more properties as needed -->

            <button class="btn btn-primary">Apply</button>
          `;

          // Set the card content
          cardBody.html(cardContent);

          // Append the card body to the card
          card.append(cardBody);

          // Append the card to the container
          container.append(card);
        });
      },
      error: function(error) {
        console.log('Error:', error);
      }
    });
  });
</script>

<!-- Card container -->
<body>
    <div id="cardContainer"></div>
</body>

