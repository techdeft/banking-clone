   <!-- Send Money to User Modal -->
   <div class="modal fade" id="taskModal" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="taskModalLabel">Send Money</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                   </button>
               </div>
               <div class="modal-body">
                   <form class="row" method="Post" action="{{ route('send.money') }}">
                       @csrf
                       <div class="mb-2 col-12">
                           <label for="taskTitle" class="form-label">Account Number</label>
                           <input type="number" class="form-control" name="account" id="account-input"
                               placeholder="42xxxxxxxx" required="">
                           {{-- <div class="accountname">

                       </div> --}}
                       </div>

                       <div class="mb-2 col-12">
                           <label for="taskTitle" class="form-label">Account Name</label>
                           <input type="text" class="form-control" id="accountname-input" readonly>

                       </div>

                       <div class="mb-2 col-12">
                           <label for="taskTitle" class="form-label">Amount</label>
                           <input type="number" class="form-control" name="amount" min="5"
                               max="{{ Balance() }}" id="taskTitle" placeholder="100" required="">
                       </div>

                       <div class="mb-2 col-12">
                           <label for="descriptions" class="form-label">Summary (optional)</label>
                           <textarea class="form-control" id="descriptions" name="summary" rows="3"></textarea>
                       </div>

                       <div class="mb-2 col-12">
                           <label for="taskTitle" class="form-label">Wallet PIN</label>
                           <input type="password" class="form-control" name="pin" id="taskTitle" required="">
                       </div>

                       <div class="col-12 d-flex justify-content-end">

                           <button type="submit" class="btn btn-primary">Send Money</button>
                       </div>
                   </form>
               </div>

           </div>
       </div>
   </div>

   <!-- Fund wallet Modal -->
   <div class="modal fade" id="payModal" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="taskModalLabel">Deposit</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                   </button>
               </div>
               <div class="modal-body">
                   <form class="row" method="Post" action="{{ route('pay') }}">
                       @csrf

                       <div class="mb-2 col-12">
                           <label for="taskTitle" class="form-label">Amount</label>
                           <input type="number" class="form-control" name="amount" min="50" id="taskTitle"
                               placeholder="10000" required="">
                       </div>


                       <div class="col-12 d-flex justify-content-end">

                           <button type="submit" class="btn btn-primary">Pay Now</button>
                       </div>
                   </form>
               </div>

           </div>
       </div>
   </div>

   <!--Send Money Modal -->
   <div class="modal fade" id="BankModal" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="taskModalLabel">Send Money to Bank</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                   </button>
               </div>
               <div class="modal-body">
                   <form class="row" method="Post" action="{{ route('send.money.bank') }}">
                       @csrf
                       <div class="mb-2 col-12">
                           <label for="taskTitle" class="form-label">Account Number</label>
                           <input type="number" class="form-control" name="account" id="account"
                               placeholder="42xxxxxxxx" required="">
                           {{-- <div class="accountname">
 
                        </div> --}}
                       </div>

                       <div class="mb-2 col-12">
                           <label for="taskTitle" class="form-label">Account Number</label>
                           <select name="bank" id="bank" class="form-control">
                               <option value="">Select Bank</option>
                               @forelse ($banks as $item)
                                   <option value="{{ $item['code'] }}">{{ $item['name'] }}</option>

                               @empty
                                   😬 No Banks fetched
                               @endforelse
                           </select>
                       </div>

                       <div class="mb-2 col-12">
                           <label for="taskTitle" class="form-label">Account Name</label>
                           <input type="text" class="form-control" id="AccName" readonly>

                       </div>

                       <div class="mb-2 col-12">
                           <label for="taskTitle" class="form-label">Amount</label>
                           <input type="number" class="form-control" name="amount" min="5"
                               max="{{ Balance() }}" id="taskTitle" placeholder="100" required="">
                       </div>

                       <div class="mb-2 col-12">
                           <label for="descriptions" class="form-label">Narration (optional)</label>
                           <textarea class="form-control" id="descriptions" name="summary" rows="3"></textarea>
                       </div>

                       {{-- <div class="mb-2 col-12">
                           <label for="taskTitle" class="form-label">Wallet PIN</label>
                           <input type="password" class="form-control" name="pin" id="taskTitle"
                               required="">
                       </div> --}}

                       <div class="col-12 d-flex justify-content-end">

                           <button type="submit" class="btn btn-primary">Send Money</button>
                       </div>
                   </form>
               </div>

           </div>
       </div>
   </div>


   <!-- Modal -->
   <div class="modal fade" id="Transfer" tabindex="-1" role="dialog" aria-labelledby="taskModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="taskModalLabel">Transfer</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                   </button>
               </div>
               <div class="modal-body">
                   <div class="me-auto">
                       <div class="row">
                           <div class="col-5 col-md-3 bg-primary p-3 rounded m-2 text-white">

                               <a href="" class="text-white" data-bs-toggle="modal"
                                   data-bs-target="#taskModal">
                                   <i class="fe fe-users fs-3"> </i>
                                   <span class="fs-6 text-uppercase fw-semi-bold">User</span>
                               </a>

                           </div>
                           <div class="col-5 col-md-3 bg-black p-3 rounded m-2 text-white">
                               <a class="text-white" data-bs-toggle="modal" data-bs-target="#BankModal">
                                   <i class="fe fe-arrow-up fs-3"></i>
                                   <span class="fs-6 text-uppercase fw-semi-bold">Bank</span>
                               </a>

                           </div>
                       </div>
                   </div>

               </div>

           </div>
       </div>
   </div>
