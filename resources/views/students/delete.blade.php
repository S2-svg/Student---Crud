 <div class="modal fade" id="deleteStudent{{ $student->id }}" tabindex="-1" aria-labelledby="deleteStudentLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <form action="{{ route('student.destroy', $student->id) }}" method="POST">
            @csrf
            @method('DELETE')
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="deleteStudentLabel">Delete Student</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                    Do you want to delete your data?
                 </div>
                 <div class="modal-footer">
                     <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                     <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                 </div>
             </div>
         </form>

     </div>
 </div>
