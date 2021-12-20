   {foreach from=$PRO item=P}
    
    <div class="col-md-6">
       <img class="thumbnail" src={$P.pro_img} alt="" width = "200" height = "200">
    </div>
   <div>
      <img src="{$TEMA}/img/payment-method.png">
      <h4 class="text-center" style="margin-top: 10px;"> {$P.pro_nome} </h4>
      <h3 class="text-center">Valor ${$P.pro_valor},00</h3>
   </div>
      <section>
         <article>
            <h2 style="font-size: 15px; margin-top: 10px;" class="text-center">Descrição do Produto</h2>
            <p>{$P.pro_desc}</p>
         </article>
      </section>
      <button style="width: 100px; height: 50px; border-radius: 5px; background:#7CFC00;" type="submit">Comprar</button>

    {/foreach}