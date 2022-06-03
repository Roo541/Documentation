<p>
You can update the quantity, trigger price, limit price, and tag of limit if touched orders until the order fills or the brokerage prevents modifications. To update an order, pass an <code>UpdateOrderFields</code> object to the <code>Update</code> method on the <code>OrderTicket</code>. The <code>Update</code> method returns an <code>OrderResponse</code> to signal the success or failure of the update request.</p>

<div class="section-example-container">
<pre class="csharp">// Create a new order and save the order ticket
var ticket = LimitIfTouchedOrder("SPY", 100, 350, 340, tag: "original tag");

// Update the order
var response = ticket.Update(new UpdateOrderFields() { 
  Quantity = 80,
  TriggerPrice = 380,
  LimitPrice = 370,
  Tag = "new tag"
});

// Check if the update was successful
if (response.IsSuccess) { 
     Debug("Order updated successfully");
}
</pre>
<pre class="python"># Create a new order and save the order ticket
ticket = self.LimitOrder("SPY", 100, 350, 340, tag="original tag")

# Update the order
update_settings = UpdateOrderFields()
update_settings.Quantity = 80
update_settings.TriggerPrice = 380
update_settings.LimitPrice = 370
update_settings.Tag = "new tag"
response = ticket.Update(update_settings)

# Check if the update was successful
if response.IsSuccess:
     self.Debug("Order updated successfully")
</pre>
</div>

<?php 

echo file_get_contents(DOCS_RESOURCES."/order-types/order-response.html"); 

include(DOCS_RESOURCES."/order-types/update-individual-fields.php");
$supportedMethods = array("UpdateLimitPrice", "UpdateQuantity", "UpdateTag");
$getUpdateIndividualFieldsText($supportedMethods);

echo file_get_contents(DOCS_RESOURCES."/order-types/update-requests.html");

?>

<p>To update individual fields of an order, call any of the following methods:</p>

<ul>
    <li><code>UpdateLimitPrice</code></li>
    <li><code>UpdateQuantity</code></li>
    <li><code>UpdateTag</code></li>
</ul>

<div class="section-example-container">
<pre class="csharp">
  - UpdateLimitPrice (can pass in a tag)
  - UpdateQuantity (can pass in a tag)
  - UpdateTag</pre>
<pre class="python">  - UpdateLimitPrice (can pass in a tag)
  - UpdateQuantity (can pass in a tag)
  - UpdateTag</pre>
</div>

