const l=(t,i)=>{const o=window.getComputedStyle(t);let e=parseFloat(o.lineHeight);isNaN(e)&&(e=parseFloat(o.fontSize)*1.2);const s=e*i;return t.scrollHeight>s};export{l as c};
