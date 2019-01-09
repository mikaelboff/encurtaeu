<div class="container-fluid text-center" style="margin-top: 8rem;">
    <a style="text-decoration: none;" href="<?= $this->config->base_url(); ?>">
        <h1 style="color: #7690C9; font-family: 'Stardos Stencil', cursive;" class="display-1">ENCURTAEU</h1>
    </a>
    <h4 style="color: #7690C9;">O ENCURTADOR DE LINKS MAIS CURTO QUE SUA PACIÊNCIA</h4>
</div>

<div class="container mt-5">
    <form method="POST" action="Links/Encurtar">
        <div class="form-group">            
            <div class="input-group">            
                <input type="text" name="url" class="form-control" placeholder="Link gigantesco a ser encurtado aqui" aria-label="Link gigantesco a ser encurtado aqui" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">ENCURTAR</button>
                </div>
            </div>
        </div>  

        <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
    </form>

    <?php
    if (isset($erro)) {
        echo '<div class="card container-fluid bg-danger" style="width: 35rem; display:none;">  
        <div class="card-body">
            <h5 class="card-title" style="color: #FFF;">' . $erro . '</h5>            
        </div>
    </div>  ';
    } else {
        echo '';
    }
    if (isset($success)) {
        echo '<div class="card container-fluid bg-success" style="width: 18rem; display:none;">  
        <div class="card-body">
            <h5 class="card-title">Link:</h5>
            <a href="' . $success . '" class="text-light"><h5 class="card-title">' . $success . '</h5></a>
        </div>
    </div> ';
    } else {
        echo '';
    }
    ?>      
</div>




