<!DOCTYPE html>
<html>
     <head>
    <style>
        body {
          background-color: rgb(55,55,55);
          color:white;
          font-family:Arial, sans-serif;
          padding:25px;
        }
      details {
        border:2px solid rgb(45,45,45);
        border-radius:5px;
        padding:10px;
      }
      a {
        color:white;
        text-decoration:underline;
      }
    </style>
    </head>
  <body>
    <h1>Proxying Webhook Requests</h1>
        <div class="MAIN">
            <strong><p>When proxying to Discord, you <mark>HAVE</mark> to follow the rules, or I may revoke your access to it.</p></strong>
          <details open><summary>Rules</summary>
            <p style="color:rgb(255, 255, 255)">
                
                1. Do not break <a href="https://discord.com/terms" target="_blank">Discord's Terms</a>.<br>
                2. Do not spam the proxy. Spam and DDOS requests will automatically be revoked by Cloudflare.<br>
                3. If anyone takes credit, report them to Rezokar#1290.<br>
                4. Do NOT use this for logging, Discord has made it clear it should not be used for such. <br> <br>
                Those are all the rules. Only four rules. Please co-operate and abide them.
            </p>
          </details>
        </div><br/>
  <p>By pressing Documentation, you consent to the rules above.</p>
        <div class="DOCUMENTATION">
          <details><summary>Documentation</summary>
            <h3>Sending Post Requests</h3>
            <p style="color:rgb(255, 255, 255)">When posting to the URL, replace discord.com (or canary.discord.com) with rezokar.xyz</p>
            <h4 style="color:rgb(0, 255, 0)">Before</h4>
            <p style="color:rgb(255, 255, 255)">https://<span style="color:lightblue">discord.com</span>/api/webhooks/1033078778081058936/tdHt4iQs7g_vCdQqzyBInev_6vKN_AP663Dh6lE4bjSVEbNrJYycyFGGO6lh3ba0NHRi</p>
            <h4 style="color:rgb(0, 255, 0)">After</h4>
            <p style="color:rgb(255, 255, 255)">https://<span style="color:lightblue">rezokar.xyz</span>/api/webhooks/1033078778081058936/tdHt4iQs7g_vCdQqzyBInev_6vKN_AP663Dh6lE4bjSVEbNrJYycyFGGO6lh3ba0NHRi</p>
        </div>
          </details>
        </div>
  </body>
</html>