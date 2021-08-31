<div>
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="ps-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN MODERN  -->
        <div class="modernSidebar-nav header navbar">
            <div class="">
                <nav id="modernSidebar">
                    <ul class="menu-categories pl-0 m-0" id="topAccordion">
                        <li class="menu">
                            <a href="{{route('dashboard')}}" class="dropdown-toggle collapsed">
                                <div class="">
                                    <i class="flaticon-checked"></i>
                                    <span>Today Task </span>
                                </div>
                            </a>
                        </li>

                        <li class="menu">
                            <a href="#tasklist" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                                <div class="">
                                    <i class="flaticon-square-menu"></i>
                                    <span>My List</span>
                                </div>
                            </a>
                            <div wire:ignore.self class="submenu list-unstyled collapse eq-animated eq-fadeInUp" id="tasklist" data-parent="#topAccordion">
                                <div class="submenu-scroll">
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="javascript:void(0);" aria-expanded="true" class="dropdown-toggle"> <span class="">My List</span> </a>
                                            <ul class="list-unstyled sub-submenu collapse show eq-animated eq-fadeInUp" id="ui-features">
                                                <li>
                                                    <ul class="list-unstyled sub-submenu collapse show eq-animated eq-fadeInUp" id="ui-features">
                                                        @foreach($taskList as $value)
                                                        <li>
                                                            <div class="float-left">

                                                                    <a href="javascript:void(0);" wire:click="archieveList({{$value->id}})" classrole="button" data-toggle="tooltip" data-placement="top" title="Delete List">
                                                                        <i class="flaticon-delete-1"></i>
                                                                    </a>

                                                            </div>
                                                            <a href="javascript:void(0);" wire:click="showList({{$value->id}})"> {{Str::limit($value->name,14)}}
                                                                @if(3 > 0)
                                                                <span class="badge badge-pills outline-badge-new">3</span>
                                                                @endif
                                                            </a>

                                                        </li>
                                                        @endforeach
                                                </li>
                                            </ul>
                                            <hr>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#createListModal" class="dropdown-toggle"> <span class="">Create New</span> </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="menu">
                            <a href="#tasklistArchieved" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                                <div class="">
                                    <i class="flaticon-delete-1"></i>
                                    <span>Archieved List</span>
                                </div>
                            </a>
                            <div wire:ignore.self class="submenu list-unstyled collapse eq-animated eq-fadeInUp" id="tasklistArchieved" data-parent="#topAccordion">
                                <div class="submenu-scroll">
                                    <ul class="list-unstyled">
                                        <li>

                                            <a href="javascript:void(0);" aria-expanded="true" class="dropdown-toggle"> <span class="">Archieved List</span> </a>
                                            <ul class="list-unstyled sub-submenu collapse show eq-animated eq-fadeInUp" id="ui-features">
                                                <li>
                                                    <ul class="list-unstyled sub-submenu collapse show eq-animated eq-fadeInUp" id="ui-features">
                                                        @foreach($archievedList as $value)
                                                        <li>
                                                            <div class="float-left">

                                                                    <a href="javascript:void(0);" wire:click="unArchieveList({{$value->id}})" classrole="button" data-toggle="tooltip" data-placement="top" title="Delete List">
                                                                        <i class="flaticon-delete-1"></i>
                                                                    </a>

                                                            </div>
                                                            <a href="javascript:void(0);" wire:click="showList({{$value->id}})"> {{Str::limit($value->name,14)}}
                                                                @if(3 > 0)
                                                                <span class="badge badge-pills outline-badge-new">3</span>
                                                                @endif
                                                            </a>

                                                        </li>
                                                        @endforeach
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
        <!--  END MODERN  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>{{$pageTitle->name ?? 'Today Task'}}</h3>
                    </div>
                </div>
                @if(isset($pageTitle))
                <div class="mb-3">
                <button class="btn btn-rounded btn-primary" wire:click="showFormCreateItem">Create List Item</button>
                <button class="btn btn-rounded btn-secondary" data-toggle="modal" data-target="#editListModal">Edit List</button>
                </div>
                @if($showFormCreateItem == true)
                <div class="card mb-3">
                    <div class="card-body">
                        <form wire:submit.prevent='storeItem'>
                            <input type="hidden" wire:model.defer="listId" value="{{$pageTitle->id}}">
                            <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" wire:model.defer="itemTitle" class="form-control">

                            <label for="">Deskripsi</label>
                            <input type="text" wire:model.defer="itemDesc" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Create Task Item</button>
                        </form>
                    </div>
                </div>
                @endif

                @endif
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th width="600px">Name</th>
                                @if(isset($pageTitle))
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($itemList as $value)
                            <tr>
                                <td>
                                    <button wire:click="checked({{$value->id}})" class="btn btn-success btn-sm btn-rounded"><i class="flaticon-check"></i></button>
                                </td>
                                <td>
                                   <p><b style="color: {{$value->parent->hex}}">{{$value->name}}</b></p>
                                   <small style="color: {{$value->parent->hex}}">{{$value->desc}}</small>
                                </td>
                                @if(isset($pageTitle))
                                <td>
                                    <button wire:click="deleteItem({{$value->id}})" class="btn btn-danger btn-sm btn-rounded"><i class="flaticon-delete"></i></button>
                                    <button wire:click="editItem({{$value->id}})" class="btn btn-warning btn-sm btn-rounded"><i class="flaticon-pencil-1"></i></button>
                                </td>
                                @endif
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>

            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>

    <!-- Modal -->
<div wire:ignore class="modal fade" id="createListModal" tabindex="-1" role="dialog" aria-labelledby="createListModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Create New List</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('taskList.store')}}" method="post">
        @csrf
        <div class="modal-body">
            <label for="">List Name</label>
            <input id="t-text" type="text" name="name" class="form-control-rounded form-control" placeholder="List Name" required>
            <label for="" class="mt-3">Hex Color</label>
            <input id="t-color" type="color" name="hex" class="form-control-rounded form-control" placeholder="Hex Color" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  @if(isset($pageTitle))
  <div wire:ignore.self class="modal fade" id="editListModal" tabindex="-1" role="dialog" aria-labelledby="editListModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update {{$this->listName}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form wire:submit.prevent='updateList'>
        <div class="modal-body">
            <input type="hidden" wire:model.defer="listId" value="{{$pageTitle->id}}">
            <label for="">List Name</label>
            <input id="t-text" type="text" wire:model.defer="listName" name="name"  class="form-control-rounded form-control" placeholder="List Name" required>
            <label for="" class="mt-3">Hex Color</label>
            <input id="t-color" wire:model.defer="listHex" type="color" name="hex" class="form-control-rounded form-control" placeholder="Hex Color" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  @endif
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>
