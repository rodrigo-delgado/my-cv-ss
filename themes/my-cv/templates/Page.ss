
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
    $MetaTags(false)
    <title>$Title</title>

        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Rodrigo's Website</title>
		<!-- Meta Description -->
        <meta name="description" content="Rodrigo Delgado's Interactive Resume">
        <meta name="keywords" content="Resume Information">
        <meta name="author" content="Rodrigo Delgado">

		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>


    </head>

    <body id="body">

  <!-- preloader -->
  <div id="preloader">
          <div class="loder-box">
            <div class="battery"></div>
          </div>
  </div>
  <!-- end preloader -->
      <!--
      Fixed Navigation
      ==================================== -->
      <% include MainNav %>
      <% include HomeSlider %>
      $Form
      <% include About %>
      <% include Skills %>
      <% include Portfolio %>

      $Layout
      <% include ContactMe %>
      <% include Footer%>


          </body>
      </html>
