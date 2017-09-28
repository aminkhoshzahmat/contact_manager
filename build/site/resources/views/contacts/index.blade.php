@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-10">
            {{ $contacts->links() }}
        </div>
        <div class="col-md-2">
            <a href="/contacts/cards" class="btn btn-default btn-block"><i class="pe-7s-id"></i> Cards</a>
        </div>
    </div>
    <br>
    <div class="clearfix"></div>
    <div class="card ">
        <div class="header">
            <h4 class="title">My Contacts</h4>
            <p class="category">You can Edit and Delete your contacts from here.</p>
        </div>
        <div class="content">
            <div class="table-full-width">
                <table class="table table-striped">
                    <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>
                                <label class="checkbox">
                                    <input type="checkbox" value="" data-toggle="checkbox">
                                </label>
                            </td>
                            <td>
                            @php
                                $photo = ! is_null($contact->photo) ? $contact->photo : 'default.png';
                            @endphp
                                {{ Html::image(
                                    'uploads/contacts/' . $photo, $contact->name,
                                    [
                                        'class' => 'media-object img-circle',
                                         'width' => 100, 'height' => 100
                                    ]) 
                                }}
                            </td>
                            <td>
                            Name: {{ $contact->name }}
                            <ul>
                                <li>Company:{{ $contact->company }}</li>
                                <li>Address:{{ $contact->address }}</li>
                                <li>Email:{{ $contact->email }}</li>
                            </ul>
                            </td>
                            
                            <td class="td-actions text-right">
                                <a href="/contacts/{{ $contact->id }}/edit" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>

                                {{ Form::open([
                                    'method' => 'DELETE',
                                    'route' => ['contacts.delete', $contact->id ]
                                ])
                                }}
                                <button onclick="return confirm('Are you sure');" type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
             {{ $contacts->links() }}
             {{-- {!! $contacts->append( Request::query() )->render() !!} --}}

            <div class="footer">
                <hr>
                <div class="stats">
                    <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
            </div>
        </div>
    </div>
</div>	
@endsection
@include('layouts.message.success')