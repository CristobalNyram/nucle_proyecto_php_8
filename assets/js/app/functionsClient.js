function getHtmlBotonesHistorico(){

}
function fnViewTranscripcionCliente() {
    var htmlInfo = `
    <form id="formEvaluacionModulo" class="custom-validation need-validation" autocomplete="off" novalidate="" action="javascript:void(0);">

    <div class="row fg-text-actividad active-blanco">
        <div class="cell-lg-12">
            <div style="text-align: left; font-size: 28px;" class="row mb-3 ">
                <div class="cell-md-1"> </div>
                <div class="cell-md-10">
                    <label><center>Transcripcion</center></label>
                </div>
                <div class="cell-md-1"></div>
            </div>

        

        </div>
    </div>

    <!-- Espacio en blanco -->
    <div class="row" >
        <div class="cell-lg-12">
        <textarea id="editor-transcripcion"></textarea>

        </div>
      
    </div>

    <!-- Botón Guardar -->

 
            
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-center-rows">
        <button class="btn-comentarios trigger-btn-modal" title="Comentario" 
        style="
            margin: .5rem 1rem;
        ">
                    <span>
                    <i class="fa fa-comment" aria-hidden="true"></i>

                    </span>
            </button>
           
        </div>
    </div>
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-between-rows">
          
            <button  class="btn-save btn-save-custom btn-cancelar-custom" >
                <span  >
                Cancelar
                <span><i class="fa fa-times"></i>
                </span>
            </button>

            <button  class="btn-save btn-save-custom btn-guardar-custom" >
                <span  >
                Guardar
                <span><i class="fa fa-save"></i>
            </span>
                
            </button>
        </div>
    </div>
</form>
`;

    $("#banner-content").html("");
    $("#banner-content").append(htmlInfo);
    
}
function fnViewManuscritoCliente() {
    var htmlInfo = `
    <form id="formEvaluacionModulo" class="custom-validation need-validation" autocomplete="off" novalidate="" action="javascript:void(0);">

    <div class="row fg-text-actividad active-blanco">
        <div class="cell-lg-12">
            <div style="text-align: left; font-size: 28px;" class="row mb-3 ">
                <div class="cell-md-1"> </div>
                <div class="cell-md-10">
                    <label><center>Manuscrito</center></label>
                </div>
                <div class="cell-md-1"></div>
            </div>

        

        </div>
    </div>

    <!-- Espacio en blanco -->
    <div class="row" >
        <div class="cell-lg-12">
        <textarea id="editor-transcripcion"></textarea>

        </div>
      
    </div>

    <!-- Botón Guardar -->

 
            
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-center-rows">
        <button class="btn-comentarios trigger-btn-modal" title="Comentario" 
        style="
            margin: .5rem 1rem;
        ">
                    <span>
                    <i class="fa fa-comment" aria-hidden="true"></i>

                    </span>
            </button>
           
        </div>
    </div>
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-between-rows">
          
            <button  class="btn-save btn-save-custom btn-cancelar-custom" >
                <span  >
                Cancelar
                <span><i class="fa fa-times"></i>
                </span>
            </button>

            <button  class="btn-save btn-save-custom btn-guardar-custom" >
                <span  >
                Guardar
                <span><i class="fa fa-save"></i>
            </span>
                
            </button>
        </div>
    </div>
</form>
`;

    $("#banner-content").html("");
    $("#banner-content").append(htmlInfo);
    
}

function fnViewPropuestaPortadaCliente() {
    var htmlInfo = `
    <form id="formEvaluacionModulo" class="custom-validation need-validation" autocomplete="off" novalidate="" action="javascript:void(0);">

    <div class="row fg-text-actividad active-blanco">
        <div class="cell-lg-12">
            <div style="text-align: left; font-size: 28px;" class="row mb-3 ">
                <div class="cell-md-1"> </div>
                <div class="cell-md-10">
                    <label><center>Propuesta de portada</center></label>
                </div>
                <div class="cell-md-1"></div>
            </div>

        

        </div>
    </div>

    <!-- Espacio en blanco -->
    <div class="row" >
        <div class="cell-lg-12">
        <iframe 
        src="https://plataforma.fedpatmex.integrameetings.com/public/docs/documentfreeworkfinal/cfa64a6b6e_1697041724.jpg" width="100%" height="600" frameborder="0" scrolling="auto"></iframe>

        </div>
      
    </div>

    <!-- Botón Guardar -->

 
            
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-center-rows">
        <button class="btn-comentarios trigger" title="Comentario" 
        style="
            margin: .5rem 1rem;
        ">
                    <span>
                    <i class="fa fa-comment" aria-hidden="true"></i>

                    </span>
            </button>
           
        </div>
    </div>

</form>
`;

    $("#banner-content").html("");
    $("#banner-content").append(htmlInfo);
    
}

function fnViewTextoFinalCliente() {
    var htmlInfo = `
    <form id="formEvaluacionModulo" class="custom-validation need-validation" autocomplete="off" novalidate="" action="javascript:void(0);">

    <div class="row fg-text-actividad active-blanco">
        <div class="cell-lg-12">
            <div style="text-align: left; font-size: 28px;" class="row mb-3 ">
                <div class="cell-md-1"> </div>
                <div class="cell-md-10">
                    <label><center>Texto final</center></label>
                </div>
                <div class="cell-md-1"></div>
            </div>

        

        </div>
    </div>

    <!-- Espacio en blanco -->
    <div class="row" >
        <div class="cell-lg-12">
        <iframe src="https://plataforma.fedpatmex.integrameetings.com/public/docs/documentfreework/c9d4ef1815_AN%C3%81LISISINTEGRALDEUNGLIOMADEALTOGRADOIDH2MUTADOMEDIANTEELUSODEPRUEBASMOLECULARES_DaneryValdezOcrospoma.pdf" width="100%" height="600" frameborder="0" scrolling="auto"></iframe>

        </div>
      
    </div>

    <!-- Botón Guardar -->

 
            
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-center-rows">
        <button class="btn-comentarios trigger-btn-modal" title="Comentario" 
        style="
            margin: .5rem 1rem;
        ">
                    <span>
                    <i class="fa fa-comment" aria-hidden="true"></i>

                    </span>
            </button>
           
        </div>
    </div>

</form>
`;

    $("#banner-content").html("");
    $("#banner-content").append(htmlInfo);
    
}

function fnViewRastreoLibro(){
    var htmlInfo = `
    <section id="timeline">
      <article>
        <div class="inner">
          <span class="date">
        <!--     <span class="day">30<sup>th</sup></span> -->
            <span class="month">Nov</span>
            <span class="year">2022</span>
          </span>


          <h6>PASO 1</h6>

            <p class="wrapper">

                <a href="https://constancias.integrameetings.com/fedpatmex-2022/" class="flat-btn"> 1</a>

            </p>


        </div>
      </article>
      <article>
        <div class="inner">
          <span class="date">
            <!--     <span class="day">30<sup>th</sup></span> -->
            <span class="month">Nov</span>
            <span class="year">2023</span>
          </span>
          <h6>PASO 2</h6>

          <p class="wrapper">

            <a href="https://constancias.integrameetings.com/fedpatmex-2023/" class="flat-btn">2</a>

          </p>
        </div>
      </article>

    </section>
        `;

    $("#banner-content").html("");
    $("#banner-content").append(htmlInfo);

}


function createQuestion(number, question, options) {
  return `
    <div class="form-group">
      <label>${number}. ${question}</label>
    </div>
    <div class="form-group2">
      ${options.map(option => `<br/><input type="radio" value="${option}" data-role="radio"> ${option}`).join('')}
    </div><br/>
  `
}

tinymce.init({
        selector: '#editor-transcripcion',
        height: 500,
        menubar: false,
        apiKey: 'mt3wtiqsapm6uhn41pwew5mb8ygukp6wsb66dkifamfh12s9', // Reemplaza con tu clave de API
        plugins: [
          'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
          'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
          'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist outdent indent | removeformat | help'
      });

$(document).on('focusin', function(e) {
  if ($(e.target).closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
    e.stopImmediatePropagation();
  }
});

$( document ).ready(function() {
    $(document).on("click", ".trigger-btn-modal", function(event) {
        console.log("hola");
        $('.modal-wrapper').toggleClass('open');
        $('.page-wrapper').toggleClass('blur-it');
     return false;
  });
});