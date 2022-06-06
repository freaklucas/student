<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <body style="font-family:Arial;font-size:12pt;background-color:teal;">
        <div>
        <h2 style="">Dahboard</h2>    
        </div>
        <div style="display:flex; align-items:center;flex:center;margin-left: 26%; flex-direction:row;">
            <xsl:for-each select="data/disciplina">
            <div style="background-color:teal;color:#a3a3a3;padding:4px;">
          <div style="text-align:center;margin:10px;width:200px;height:200px;color:white;padding:10px; box-shadow: 20px 15px 15px #a3a3a3;">
            <h2 style="display:flex; flex-direction:column;"> Projeto de software</h2>
            <h2 style="display:flex; flex-direction:column;">Nota: 4.55</h2>
            <h2 style="display:flex; flex-direction:column;">Progresso: 2/5</h2>
          </div>    
        </div>
    </xsl:for-each>
        </div>
        <div style="display:flex; align-items:center;flex:center;margin-left: 26%; flex-direction:row;">
            <xsl:for-each select="data/disciplina">
            <div style="background-color:teal;color:#a3a3a3;padding:4px;">
          <div style="text-align:center;margin:10px;width:200px;height:200px;color:white;padding:10px; box-shadow: 20px 15px 15px gray;">
            <h2 style="display:flex; flex-direction:column;"> Projeto de software</h2>
            <h2 style="display:flex; flex-direction:column;">Nota: 4.55</h2>
            <h2 style="display:flex; flex-direction:column;">Progresso: 2/5</h2>
          </div>    
        </div>
    </xsl:for-each>
        </div>
        
</body>
</html>