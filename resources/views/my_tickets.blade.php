@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-ticket"> My Tickets</i>
            </div>

            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->category }}</td>
                        <td>
                          <a href="/show-ticket/{{$ticket->id}}">
                            {{ $ticket->title }}
                          </a>
                        </td>
                        <td><span class="label label-success">Open</span></td>
                        <td>{{ $ticket->updated_at }}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScripts -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
      integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
      integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
      crossorigin="anonymous"
    ></script>
@endsection
