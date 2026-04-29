
 
<nav style="background: rgba(4,4,15,0.85); border-bottom: 1px solid rgba(99,102,241,0.2); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);" class="sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo -->
        <a href="/" class="flex items-center gap-3">
            <div style="width:36px;height:36px;background:linear-gradient(135deg,#7c3aed,#6366f1);border-radius:10px;display:flex;align-items:center;justify-content:center;box-shadow:0 0 18px rgba(124,58,237,0.5);">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
                </svg>
            </div>
            <span style="font-family:'Syne',sans-serif;font-weight:800;letter-spacing:0.08em;color:#fff;font-size:1.2rem;">
                JOB<span style="color:#a5b4fc;">FINDER</span>
            </span>
        </a>

        
        <div class="hidden md:flex items-center gap-8">
            <a href="/" style="font-family:'Syne',sans-serif;letter-spacing:0.05em;font-size:0.85rem;color:#94a3b8;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='#94a3b8'">Home</a>
            <a href="/listings" style="font-family:'Syne',sans-serif;letter-spacing:0.05em;font-size:0.85rem;color:#94a3b8;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='#94a3b8'">Listings</a>
            <a href="/about" style="font-family:'Syne',sans-serif;letter-spacing:0.05em;font-size:0.85rem;color:#94a3b8;text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#a5b4fc'" onmouseout="this.style.color='#94a3b8'">About</a>
        </div>

        
        <div style="display:flex;align-items:center;gap:0.75rem;">
            <a href="/listings" style="background:linear-gradient(135deg,#7c3aed,#6366f1);border-radius:8px;padding:0.45rem 1.1rem;font-size:0.8rem;font-weight:700;letter-spacing:0.08em;color:#fff;text-decoration:none;box-shadow:0 0 20px rgba(99,102,241,0.35);transition:all 0.3s;font-family:'Syne',sans-serif;text-transform:uppercase;"
                onmouseover="this.style.boxShadow='0 0 35px rgba(124,58,237,0.7)';this.style.transform='translateY(-1px)'"
                onmouseout="this.style.boxShadow='0 0 20px rgba(99,102,241,0.35)';this.style.transform='translateY(0)'">
                Browse Jobs
            </a>

            <button onclick="document.getElementById('post-modal').classList.add('active')"
                style="display:inline-flex;align-items:center;gap:0.5rem;background:transparent;border:1px solid rgba(99,102,241,0.45);color:#a5b4fc;border-radius:8px;padding:0.45rem 1rem;font-family:'Syne',sans-serif;font-weight:700;font-size:0.78rem;letter-spacing:0.07em;text-transform:uppercase;cursor:pointer;transition:all 0.3s;"
                onmouseover="this.style.background='rgba(99,102,241,0.15)';this.style.borderColor='rgba(124,58,237,0.7)';this.style.boxShadow='0 0 20px rgba(99,102,241,0.3)'"
                onmouseout="this.style.background='transparent';this.style.borderColor='rgba(99,102,241,0.45)';this.style.boxShadow='none'">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/>
                </svg>
                Post a Job
            </button>
        </div>

    </div>
</nav>