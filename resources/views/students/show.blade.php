 <div class="modal fade" id="showStudent{{ $student->id }}" tabindex="-1" aria-labelledby="showStudentLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <form action="{{ route('student.index') }}"></form>
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="showStudentLabel">Student Details</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <p><strong>Name:</strong> {{ $student->name }}</p>
                 <p><strong>Email:</strong> {{ $student->email }}</p>
                 <p><strong>Phone:</strong> {{ $student->phone }}</p>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>
