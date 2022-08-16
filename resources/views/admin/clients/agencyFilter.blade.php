          <thead>
            <tr>
              <th>S.No.</th>
              <th>Company Name</th>
              <th>Name</th>
              <th>Region</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>S.No.</th>
              <th>Company Name</th>
              <th>Name</th>
              <th>Region</th>
              <th>Email</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @forelse($clientList as $key => $client)

              <tr>
                <td>{{ ++$key }}</td>
                <td>{{ isset($client->company)?$client->company:'-' }}</td>
                <td>{{ $client->firstName.' '.$client->lastName }}</td>
                <td>{{App\Http\Controllers\Web\Admin\ClientController::getUserRegion($client->region)}}</td>
                <td>{{ $client->email }}</td>
                <td>{{  $client->status }}</td>
                <td> 
                  <a href="{{ route('researchshow', $client->id) }}" class="btn btn-primary faIconsInList" title="View">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="{{ route('researchEdit', $client->id) }}" class="btn btn-warning faIconsInList" title="Edit">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="Javascript:void(0)" class="btn btn-danger faIconsInList openDeleteModal" title="Delete" data-deleteMOdalText="Are you sure you want to delete this client?" data-deleteUrl="{{ route('researchDelete', $client->id) }}">
                    <i class="fas fa-trash"></i>
                  </a>          
                </td>
              </tr>
            @empty
              <p>No Record Found</p>
            @endforelse
          </tbody>