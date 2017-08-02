@extends('layouts.app')

@section('content')
      <input type="hidden" id="pageid" value="{{ $page[0]->pageid }}">
      <h1>Page: {{ $page[0]->name }}</h1>
       <div class="row">
                 <table class="table-condensed" width="100%">
                    <thead>
                        <tr>
                            <th><input style="width:20px;height:20px;" class="form-control" type="checkbox" id="sel_all" onclick="checkAll(this)"></th>
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
                            <td class="col-lg-0"><input style="width:20px;height:20px;" type="checkbox" class="sel form-control" name="id[]" value="{{ $ticket->id }}"></td>
                            <td class="col-lg-3">{{ $ticket->ticket_id }}</td>
                            <td class="col-lg-3">{{ $ticket->description }}</td>
                            <td class="col-lg-3">{{ $ticket->notes }}</td>
                            <td class="col-lg-3"><button class="btn btn-primary" onclick="edit({{ $ticket->id }})">Edit</button></td>
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
                <button class="btn btn-success" onclick="add()">
                    Add
                </button>
                <button class="btn btn-danger" onclick="remove()">
                    Remove
                </button>
            </div>
@endsection
