<nav class="container-xl tab-pane fade" id="toner">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link" id="nav-transactions-tab" data-bs-toggle="tab" data-bs-target="#tonerTransactions" type="button" role="tab" aria-controls="nav-transaction" aria-selected="true">Transactions</button>
    <button class="nav-link" id="nav-balance-tab" data-bs-toggle="tab" data-bs-target="#tonerBalance" type="button" role="tab" aria-controls="nav-balance" aria-selected="false">Balance</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    @include('components.tabs.toner-transactions')
    @include('components.tabs.toner-balance')
</div>

