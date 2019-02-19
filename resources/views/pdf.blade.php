<!-- pdf.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table ">
      <tr>
        <td><h2>Full Name: 
          {{$user->full_name}}
          </h2><br/><br/>
        </td>
        <td><h2>Street Address: 
          {{$user->street_address}}
          </h2><br/><br/>
        </td>
      </tr>
      <tr>
        <td><h2>City: 
          {{$user->city}}
          </h2><br/><br/>
        </td>
        <td><h2>Poscode: 
          {{$user->zip_code}}
          </h2><br/><br/>
        </td>
      </tr>
    </table>
  </body>
</html>