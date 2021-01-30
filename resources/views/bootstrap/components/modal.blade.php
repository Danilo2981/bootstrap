@extends('bootstrap.bootstrap')

@section('title', 'Modal')

@section('style')
<style>
   
</style>
@endsection

@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h3>Live demo</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h2>Hola mundo</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quae odit voluptatem dolorum quibusdam ea doloremque numquam ab ad totam quo minus, aliquid harum suscipit consequuntur exercitationem ipsa? Facilis, natus.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h3>Static backdrop</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Launch static backdrop modal
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h2>Hola mundo</h2>
                            <p>ELE Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quae odit voluptatem dolorum quibusdam ea doloremque numquam ab ad totam quo minus, aliquid harum suscipit consequuntur exercitationem ipsa? Facilis, natus.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="row mt-3">
        <div class="col">
            <h3>Scrolling long content</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollBackdrop">
                Launch scrolling backdrop modal
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="scrollBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scrollBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h2>Hola mundo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quae odit voluptatem dolorum quibusdam ea doloremque numquam ab ad totam quo minus, aliquid harum suscipit consequuntur exercitationem ipsa? Facilis, natus.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae mollitia voluptatem consequatur esse, perspiciatis illo non aspernatur incidunt vero eaque quo recusandae, consectetur reprehenderit impedit, aut vitae fuga dolorum aliquam?</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates reiciendis iure sunt nobis quae fugit inventore illum labore harum molestias repellat facilis, nesciunt at deserunt unde laborum qui necessitatibus veritatis.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi earum cum ea eum explicabo inventore debitis delectus rerum laborum ipsa nobis fugit vero ex aliquid esse, fuga maiores veritatis deserunt!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, esse impedit quaerat saepe quae quos sequi vel aperiam. Pariatur vero repellendus expedita minus non eum nam illum quidem nisi enim.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ullam quaerat recusandae aspernatur ab, architecto adipisci repellendus, accusamus similique magnam fuga officiis ad beatae illo officia eaque facere ducimus sapiente!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nemo quis, voluptatem qui, nam in quasi eligendi debitis modi veniam maxime error obcaecati deserunt vel quae exercitationem facere officia placeat!</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod corporis ullam, rerum ex porro ad a debitis laborum minima officia, perferendis alias! Quas optio magnam molestiae natus beatae culpa voluptatem.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quos accusamus explicabo repellat modi, quam odio deleniti neque optio cupiditate, natus molestiae excepturi commodi animi. Similique praesentium unde itaque temporibus.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugit, impedit enim consequatur neque deleniti officia expedita laudantium vitae porro delectus consectetur corrupti ullam qui optio laboriosam, reprehenderit dolorem sed.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero sint culpa, optio cum recusandae corporis. Cumque eos delectus, odit deleniti illum impedit velit, vero quae nisi culpa libero iure sit!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h3>Vertically centered</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollverticalBackdrop">
                Launch vertical scrolling backdrop modal
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="scrollverticalBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scrollverticalBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="scrollverticalBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h2>Hola mundo</h2>
                            <p>Vertical Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint quae odit voluptatem dolorum quibusdam ea doloremque numquam ab ad totam quo minus, aliquid harum suscipit consequuntur exercitationem ipsa? Facilis, natus.</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae mollitia voluptatem consequatur esse, perspiciatis illo non aspernatur incidunt vero eaque quo recusandae, consectetur reprehenderit impedit, aut vitae fuga dolorum aliquam?</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates reiciendis iure sunt nobis quae fugit inventore illum labore harum molestias repellat facilis, nesciunt at deserunt unde laborum qui necessitatibus veritatis.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi earum cum ea eum explicabo inventore debitis delectus rerum laborum ipsa nobis fugit vero ex aliquid esse, fuga maiores veritatis deserunt!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, esse impedit quaerat saepe quae quos sequi vel aperiam. Pariatur vero repellendus expedita minus non eum nam illum quidem nisi enim.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, ullam quaerat recusandae aspernatur ab, architecto adipisci repellendus, accusamus similique magnam fuga officiis ad beatae illo officia eaque facere ducimus sapiente!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nemo quis, voluptatem qui, nam in quasi eligendi debitis modi veniam maxime error obcaecati deserunt vel quae exercitationem facere officia placeat!</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod corporis ullam, rerum ex porro ad a debitis laborum minima officia, perferendis alias! Quas optio magnam molestiae natus beatae culpa voluptatem.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quos accusamus explicabo repellat modi, quam odio deleniti neque optio cupiditate, natus molestiae excepturi commodi animi. Similique praesentium unde itaque temporibus.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugit, impedit enim consequatur neque deleniti officia expedita laudantium vitae porro delectus consectetur corrupti ullam qui optio laboriosam, reprehenderit dolorem sed.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero sint culpa, optio cum recusandae corporis. Cumque eos delectus, odit deleniti illum impedit velit, vero quae nisi culpa libero iure sit!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h3>Using the grid</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popperBackdrop">
                Launch grid modal
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="popperBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="popperBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="popperBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                        <div class="col-md-4">.col-md-4</div>
                                        <div class="col-md-4 ms-auto">.col-md-4 .ms-auto</div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3 ms-auto">.col-md-3 .ms-auto</div>
                                        <div class="col-md-2 ms-auto">.col-md-2 .ms-auto</div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6 ms-auto">.col-md-6 .ms-auto</div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-9">
                                        Level 1: .col-sm-9
                                            <div class="row">
                                                <div class="col-8 col-sm-6">
                                                Level 2: .col-8 .col-sm-6
                                                </div>
                                                <div class="col-4 col-sm-6">
                                                Level 2: .col-4 .col-sm-6
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h3>Varying modal content</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@fat">Open modal for @fat</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#varyingModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>
            
            <!-- Modal -->
            <div class="modal fade" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="varyingModalLabel">New message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h3>Optional sizes</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizesmBackdrop">Launch Small size</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizeBackdrop">Launch Default size</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizelgBackdrop">Launch Large size</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sizexlBackdrop">Launch Extra Large size</button>
            
            <!-- Modal -->
            <div class="modal fade" id="sizesmBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sizesmBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sizesmBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h3>Small</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rerum qui vel repellat alias sint, ullam quos doloribus fugit architecto perspiciatis est autem dicta eius error cum minima nostrum rem.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="sizeBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sizeBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sizeBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h3>Default</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rerum qui vel repellat alias sint, ullam quos doloribus fugit architecto perspiciatis est autem dicta eius error cum minima nostrum rem.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="sizelgBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sizelgBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sizelgBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h3>Large</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rerum qui vel repellat alias sint, ullam quos doloribus fugit architecto perspiciatis est autem dicta eius error cum minima nostrum rem.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="sizexlBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sizexlBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sizexlBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h3>Extra Large</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit rerum qui vel repellat alias sint, ullam quos doloribus fugit architecto perspiciatis est autem dicta eius error cum minima nostrum rem.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <a href="{{ route('index') }}">INDICE</a>
        </div>
    </div>
</div>

<script>
    var exampleModal = document.getElementById('varyingModal')
    exampleModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalBodyInput = exampleModal.querySelector('.modal-body input')

        modalTitle.textContent = 'New message to ' + recipient
        modalBodyInput.value = recipient
})
</script>

@endsection