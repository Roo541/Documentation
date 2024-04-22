<p>The <code class="csharp">ContractDepthOffset</code><code class="python">contract_depth_offset</code> setting is an <code>int</code> that defines which contract to use for the continuous Futures contract. 0 is the front month contract, 1 is the following back month contract, and 3 is the second back month contract. The default value is 0. To change the contract depth offset, in the <a href='/docs/v2/writing-algorithms/initialization'>Initialize</a> method, 