<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('company', 'Company') }}
            {{ Form::text('company', null, [
                'placeholder' => 'Company name',
                'class' => 'form-control'
                ]) 
            }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('phone', 'phone') }}
            {{ Form::text('phone', null, [
                'placeholder' => 'Conact phone number',
                'class' => 'form-control'
                ]) 
            }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('name', 'name') }}
            {{ Form::text('name', null, [
                'placeholder' => 'Enter contact name',
                'class' => 'form-control'
                ]) 
            }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('email', 'email') }}
            {{ Form::text('email', null, [
                'placeholder' => 'Enter contact email',
                'class' => 'form-control'
                ]) 
            }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('address', 'address') }}
            {{ Form::text('address', null, [
                'placeholder' => 'Contact address',
                'class' => 'form-control'
                ]) 
            }}
        </div>
    </div>
</div><hr>
<div class="row">
    <div class="col-md-9">
        <div class="form-group">
            {{ Form::label('group_id', 'groups Contact') }}
            {{ Form::select('group_id', $groups, null, [
                'class' => 'form-control'
                ]) 
            }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label><br><br><br></label>
            <button id="addGroup" class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <i class="pe-7s-plus"></i>Add Group
            </button>
        </div>
    </div>
</div>
<hr>
<div class="row">
        <div class="collapse" id="collapseExample">
    <div class="col-md-9">
            {{ Form::label('group', 'group name')}}
            {{ Form::text('group', null, [
                'placeholder' => 'Enter group name here',
                'class' => 'form-control'
            ])}}
    </div>
    <div class="col-md-3">
        <label><br><br><br></label>
        <button id="add-new-btn" class="btn btn-success"><i class="pe-7s-add-user"></i> Add</button>
    </div>
        </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('about', 'about Contact') }}
            {{ Form::textarea('about', null, [
                'placeholder' => 'Write down something about this contact.',
                'class' => 'form-control',
                'rows' => 3
                ]) 
            }}
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::label('photo', 'Choose Photo') }}
            {{ Form::file('photo') }}
            <p class="help-block">valid enxtensions : png, jpg, jpeg, bmp</p>
          </div>
    </div>
</div>
<input type="submit" class="btn btn-info btn-fill pull-right" value="{{ !empty($contact->id) ? "Upadate" : "Save"}}">
<div class="clearfix"></div>
@section('js-script')
<script type="text/javascript">
    $("#add-new-btn").click(function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        var newGroup = $('#group');
        var inputGroup = newGroup.closest('.col-md-9');
        $.ajax({
            url: "/groups/autocomplete",
            method: "post",
            data: {
                name: $("#group").val(),
                _token: $("input[name=_token]").val()
            },
            success: function(group) {
                if (group.id != null)
                {
                    inputGroup.removeClass('has-error');
                    inputGroup.find('text-danger').remove();

                    var newOption =  $('<option></option>')
                            .attr('value', group.id)
                            .attr('selected', true)
                            .text(group.name)

                    $("select[name=group_id]")
                        .append( newOption );
                    newGroup.val("");
                    setTimeout(function() { $('#addGroup').click(); }, 2000);
                }
            
                newGroup.addClass('has-success');
                inputGroup.find('.text-danger').remove();
                inputGroup
                        .find('input')
                        .after('<p class="text-success">' + 'Group added successfully.' + '</p>');
            },
            error: function(xhr) {
                var jsonData = xhr.responseJSON;
                var msg = jsonData.errors.name[0];
                if(msg) {
                    newGroup.addClass('has-error');
                    inputGroup.find('.text-danger').remove();
                    inputGroup.find('input').after('<p class="text-danger">' + msg + '</p>');
                }
            }
        });
    });
</script>
@endsection

