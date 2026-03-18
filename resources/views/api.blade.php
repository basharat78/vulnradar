@extends('layouts.app')

@section('title', 'API Keys')
@section('subtitle', '/ REST API Access')

@section('content')
<div style="background:var(--surface);border:1px solid rgba(167,139,250,.3);border-radius:var(--radius-lg);padding:18px 20px;display:flex;align-items:center;gap:14px;margin-bottom:24px;">
  <div style="width:40px;height:40px;background:var(--purple-dim);border-radius:10px;display:flex;align-items:center;justify-content:center;color:var(--purple);flex-shrink:0;">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
  </div>
  <div style="flex:1;">
    <div style="font-weight:600;color:var(--text);margin-bottom:3px;">REST API Access — Pro Feature</div>
    <div style="font-size:12px;color:var(--text3);">Use API keys to trigger scans, fetch results, and integrate VulnRadar into your CI/CD pipeline or custom dashboards.</div>
  </div>
  <a href="#" style="font-size:12px;color:var(--cyan);font-family:var(--font-mono);text-decoration:none;">View Docs →</a>
</div>

<div class="panel">
  <div class="panel-header">
    <div class="panel-title">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
      API Keys
    </div>
    <button class="btn btn-primary btn-sm" onclick="document.getElementById('newKeyModal').style.display='flex'">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
      New API Key
    </button>
  </div>
  <div style="padding:16px 20px;">
  
  <div class="api-key-card">
    <div class="key-header">
      <div class="key-name">Production Key</div>
      <div style="display:flex;gap:8px;align-items:center;">
        <span class="tag tag-green">Active</span>
        <button class="mini-btn" style="color:var(--red);">Revoke</button>
      </div>
    </div>
    <div class="key-value-wrap">
      <div class="key-value">vr_live_Xk92mNpQrT••••••••••••••••••••••</div>
      <button class="mini-btn">Copy</button>
      <button class="mini-btn">Reveal</button>
    </div>
    <div class="key-meta">
      <div class="k-meta-item">Created: <span>Created 2 months ago</span></div>
      <div class="k-meta-item">Requests: <span>1,240 requests</span></div>
      <div class="k-meta-item">Last used: <span>2 min ago</span></div>
    </div>
  </div>
  <div class="api-key-card">
    <div class="key-header">
      <div class="key-name">Staging / Dev</div>
      <div style="display:flex;gap:8px;align-items:center;">
        <span class="tag tag-green">Active</span>
        <button class="mini-btn" style="color:var(--red);">Revoke</button>
      </div>
    </div>
    <div class="key-value-wrap">
      <div class="key-value">vr_live_Bm4nKpWqAe••••••••••••••••••••••</div>
      <button class="mini-btn">Copy</button>
      <button class="mini-btn">Reveal</button>
    </div>
    <div class="key-meta">
      <div class="k-meta-item">Created: <span>Created 3 weeks ago</span></div>
      <div class="k-meta-item">Requests: <span>89 requests</span></div>
      <div class="k-meta-item">Last used: <span>2 min ago</span></div>
    </div>
  </div>
  </div>
</div>

<!-- API Reference -->
<div class="panel">
  <div class="panel-header">
    <div class="panel-title">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
      API Endpoints Reference
    </div>
    <span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">Base URL: https://api.vulnradar.com/v1</span>
  </div>
  <div style="padding:8px 20px;">
    
    <div class="endpoint-row">
      <span class="method-badge m-get">GET</span>
      <span class="endpoint-path">/sites</span>
      <span class="endpoint-desc">List all monitored sites in your workspace</span>
    </div>
    <div class="endpoint-row">
      <span class="method-badge m-post">POST</span>
      <span class="endpoint-path">/sites</span>
      <span class="endpoint-desc">Add a new site to monitor</span>
    </div>
    <div class="endpoint-row">
      <span class="method-badge m-get">GET</span>
      <span class="endpoint-path">/sites/{id}</span>
      <span class="endpoint-desc">Get details for a specific site</span>
    </div>
    <div class="endpoint-row">
      <span class="method-badge m-delete">DELETE</span>
      <span class="endpoint-path">/sites/{id}</span>
      <span class="endpoint-desc">Remove a site from monitoring</span>
    </div>
    <div class="endpoint-row">
      <span class="method-badge m-post">POST</span>
      <span class="endpoint-path">/sites/{id}/scan</span>
      <span class="endpoint-desc">Trigger an immediate scan on a site</span>
    </div>
    <div class="endpoint-row">
      <span class="method-badge m-get">GET</span>
      <span class="endpoint-path">/scans</span>
      <span class="endpoint-desc">List all scans with optional filters</span>
    </div>
    <div class="endpoint-row">
      <span class="method-badge m-get">GET</span>
      <span class="endpoint-path">/scans/{id}</span>
      <span class="endpoint-desc">Get full scan results and findings</span>
    </div>
    <div class="endpoint-row">
      <span class="method-badge m-get">GET</span>
      <span class="endpoint-path">/scans/{id}/report</span>
      <span class="endpoint-desc">Download PDF report for a scan</span>
    </div>
    <div class="endpoint-row">
      <span class="method-badge m-get">GET</span>
      <span class="endpoint-path">/findings</span>
      <span class="endpoint-desc">List all findings across all sites</span>
    </div>
    <div class="endpoint-row">
      <span class="method-badge m-get">GET</span>
      <span class="endpoint-path">/findings/{id}</span>
      <span class="endpoint-desc">Get details for a specific finding</span>
    </div>
  </div>
</div>

<!-- New Key Modal -->
<div id="newKeyModal" class="modal-backdrop" style="display:none;" onclick="if(event.target===this)this.style.display='none'">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title">Create New API Key</div>
      <div class="modal-close" onclick="document.getElementById('newKeyModal').style.display='none'"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></div>
    </div>
    <div class="modal-body">
      <div class="form-group"><label class="form-label">Key Name</label><input class="form-input" type="text" placeholder="e.g. CI/CD Pipeline, Mobile App"/><div class="form-hint">A descriptive name to identify this key later</div></div>
      <div class="form-group"><label class="form-label">Permissions</label>
        <select class="form-input"><option>Read only — View sites, scans, findings</option><option>Read + Write — Trigger scans, add sites</option><option>Full access — All operations</option></select>
      </div>
      <div class="form-group"><label class="form-label">Expiry</label>
        <select class="form-input"><option>Never</option><option>30 days</option><option>90 days</option><option>1 year</option></select>
      </div>
      <div style="background:var(--yellow-dim);border:1px solid rgba(255,209,102,.3);border-radius:var(--radius);padding:12px 14px;font-size:12.5px;color:var(--yellow);">
        ⚠ Your key will only be shown once after creation. Copy and store it securely.
      </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-ghost" onclick="document.getElementById('newKeyModal').style.display='none'">Cancel</button>
      <button class="btn btn-primary">Generate Key</button>
    </div>
  </div>
</div>
@endsection
