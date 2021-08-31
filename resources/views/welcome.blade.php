<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        
        <title>StockApp</title>
    </head>
    <body class="antialiased">
        <div class="jumbotron">
            <p class=" mt-4 p5 -4 mx-4 ">hey probable employer, this is stock market something i made table visualization with 
                , the most hard part was the pagination as i always used the pagination with orm i didn't really need to 
            understand how that works but in this case as i didn't use orm i had to make the pagination stuff myself(with the help of stack overflow mostly) </p>
            <hr class="my-4">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <x-table :allData="$all_data"></x-table>
            </div>
          </div>
        </div>
    </body>

</html>
