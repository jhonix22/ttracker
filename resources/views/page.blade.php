@extends('layouts.app')

@section('content')
      <input type="hidden" id="pageid" value="{{ $page[0]->pageid }}">
      <h1>Page: {{ $page[0]->name }}</h1>
       <div class="row">
                 <table class="table">
                    <thead>
                        <tr>
                            <th>Ticket #</th>
                            <th>Description</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
        @if(sizeof($tickets) > 0)
                 @foreach($tickets as $ticket) 
                        <tr>
                            <td class="col-lg-3">{{ $ticket->ticket_id }}</td>
                            <td class="col-lg-3">{{ $ticket->description }}</td>
                            <td class="col-lg-3">{{ $ticket->notes }}</td>
                            <td class="col-lg-3">&nbsp;</td>
                        </tr>
                 @endforeach 
        @else
                        <tr class="col-lg-15">
                            <td class="col-lg-15 text-center" colspan="15"> No Results Found. </td>
                        </tr>
        @endif
                     </tbody>
                </table>
            </div>
            <div class="row pull-right">
                <button class="btn btn-success">
                    Add
                </button>
            </div>
@endsection
