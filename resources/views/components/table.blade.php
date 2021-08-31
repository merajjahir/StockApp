<div>
  



    <table class="table table-responsive table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Trade code  </th>
            <th scope="col">High</th>
            <th scope="col">Low</th>
            <th scope="col">Open</th>
            <th scope="col">Close</th>
            <th scope="col">Volume</th>
            
          </tr>
        </thead>
          @foreach ($allData as $key => $value)
            @if ($key ==='data')
                @foreach ($value as $item)
                    @foreach ($item as $subitem)
                      <tbody>
                          <tr>
                              <td> {{$subitem->date}}</td>
                              <td> {{$subitem->trade_code}}</td>
                              <td> {{$subitem->high}}</td>
                              <td> {{$subitem->low}}</td>
                              <td> {{$subitem->open}}</td>
                              <td> {{$subitem->close}}</td>
                              <td> {{$subitem->volume}}</td>

                          </tr>
                      </tbody>
                  
                    @endforeach
                  @endforeach
            @endif
          @endforeach
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        
        <li class="page-item">
          @foreach ($allData as $key => $value)  
            @if ($key == 'prev_page_url')
              <a class="page-link" href="{{route('home').$value}}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            @endif
          @endforeach
        </li>
        <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
        @foreach ($allData as $key => $value)
          @if ($key == 'last_page_url')
              <li class="page-item"><a class="page-link" href=" {{route('home').$value}} ">Last page</a></li>
          @endif
        @endforeach 

        <li class="page-item">
          
          @foreach ($allData as $key => $value)
            @if ($key =='next_page_url')

              <a class="page-link" href="{{route('home').$value}}" aria-label="Next">  
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>

            @endif
          @endforeach
          </a>
        </li>
      </ul>
    </nav>
      
     
</div>