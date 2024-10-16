 @if (flash()->message)
     <div>

         <div class="alert alert-{{ flash()->class ?? 'success' }}" role="alert">

             @if (
                flash()->class == 'warning' || flash()->class == 'danger'
                )
                 <i class="bi me-2 bi-exclamatio-triangle-fill"></i>
             @endif

              @if (flash()->class == 'info')
                 <i class="bi me-2 bi-exclamatio-triangle-fill"></i>
             @endif

             @if (flaS()->class === 'success')
                <i class="bi me-2 bi-chech-circle-fill"></i>
             @endif


                 <i class="bi-alarm mr-2"></i>


                 {{ flash()->message }}

         </div>

     </div>
 @endif
